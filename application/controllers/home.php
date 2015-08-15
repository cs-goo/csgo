<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	// public function __construct(){
	// 	var_dump(STEAM_GAME_ID);die;
	// }
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('openid');
		$this->load->library('session');
		

	}
	
	public function index()
	{
		$openid = new Openid();
		$data=array();
		try{
			$button['small'] = "small";
		    $button['large_no'] = "large_noborder";
		    $button['large'] = "large_border";
		    $button = $button[button_style];
			if(!$openid->mode) {
		        if(isset($_GET['login'])) {
		            $openid->identity = 'http://steamcommunity.com/openid';
		            header('Location: ' . $openid->authUrl());
                     
		            		        }

			    $data['form'] = "<form action=\"?login\" method=\"post\"> <input type=\"image\" src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_".$button.".png\"></form>";
			   

			
				
			}elseif($openid->mode == 'cancel') {
	        echo 'User has canceled authentication!';
		    } else {
		        if($openid->validate()) { 
		                $id = $openid->identity;
		                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
		                preg_match($ptn, $id, $matches);
		                $_SESSION['steamid'] = $matches[1]; 

		                //Determine the return to page. We substract "login&"" to remove the login var from the URL.
		                //"file.php?login&foo=bar" would become "file.php?foo=bar"
		                $returnTo = str_replace('login&', '', $_GET['openid_return_to']);
		                //If it didn't change anything, it means that there's no additionals vars, so remove the login var so that we don't get redirected to Steam over and over.
		                if($returnTo === $_GET['openid_return_to']) $returnTo = str_replace('?login', '', $_GET['openid_return_to']);
						
		                redirect('home/login');
		        } else {
		        	if($this->session->userdata('steamid') != null){
		        		$data['form'] = $this->session->userdata('personaname');
		        	}else{
		                $data['form'] = "<form action=".loginpage." method=\"post\"> <input type=\"image\" src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_".$button.".png\"></form>";
		        	}
		        }

		    }
		}catch(Exception $e){}
		 $this->load->model('csgomodel');
		 $data['records'] = $this->csgomodel->getData();
		 $this->load->view('csgo',$data);

	}
	public function login()
	{

		if($this->session->userdata('steamid') != null){
			 @ $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".API_KEY."&steamids=".$this->session->userdata('steamid'));
            $content = json_decode($url, true);
			      $data = array(
				'steam_steamid' => @$content['response']['players'][0]['steamid'],
				'steam_communityvisibilitystate' => @$content['response']['players'][0]['communityvisibilitystate'],
				'steam_profilestate' => @$content['response']['players'][0]['profilestate'],
				'steam_personaname' =>  @$content['response']['players'][0]['personaname'],
				'steam_lastlogoff'=>@$content['response']['players'][0]['lastlogoff'],
				'steam_profileurl' => @$content['response']['players'][0]['profileurl'],
				'steam_avatar' =>  @$content['response']['players'][0]['avatar'],
				'steam_avatarmedium' =>  @$content['response']['players'][0]['avatarmedium'],
				'steam_avatarfull' => @$content['response']['players'][0]['avatarfull'],
				'steam_personastate' => @$content['response']['players'][0]['personastate'],
				'steam_inventory' => @$content['response']['players'][0]['inventory']

				);
				 if (isset($content['response']['players'][0]['realname'])) { 
    	           $data['steam_realname'] = @$content['response']['players'][0]['realname'];
    	       } else {
    	           $data['steam_realname'] = "Real name not given";
			   }
				$data['steam_primaryclanid'] = @$content['response']['players'][0]['primaryclanid'];
				$data['steam_timecreated'] = @$content['response']['players'][0]['timecreated'];
				$data['steam_uptodate'] = true;
				$this->session->set_userdata($data);
		}
		
		$userDet['steamid'] = $this->session->userdata('steam_steamid');
        $userDet['communityvisibilitystate'] = $this->session->userdata('steam_communityvisibilitystate');
        $userDet['profilestate'] = $this->session->userdata('steam_profilestate');
        $userDet['personaname'] = $this->session->userdata('steam_personaname');
        $userDet['lastlogoff'] = $this->session->userdata('steam_lastlogoff');
        $userDet['profileurl'] = $this->session->userdata('steam_profileurl');
        $userDet['avatar'] = $this->session->userdata('steam_avatar');
        $userDet['avatarmedium'] = $this->session->userdata('steam_avatarmedium');
        $userDet['avatarfull'] = $this->session->userdata('steam_avatarfull');
        $userDet['personastate'] = $this->session->userdata('steam_personastate');
        $userDet['realname'] = $this->session->userdata('steam_realname');
        $userDet['primaryclanid'] = $this->session->userdata('steam_primaryclanid');
        $userDet['timecreated'] = $this->session->userdata('steam_timecreated');

        
	  
		$this->load->view('csgo',$userDet);


	}

	public function logout()
	{
		
        $this->session->sess_destroy();
	}	
}
