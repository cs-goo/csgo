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

	}
	
	public function index()
	{
		$openid = new Openid();
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
		                header('Location: '.$returnTo);
		        } else {
		                echo "User is not logged in.\n";
		        }

		    }
		}catch(Exception $e){}
		 $this->load->view('csgo',$data);

	}
	public function login()
	{
      $data = array(
      	'steam_steamid' => 'steamid', 
      	'steam_communityvisibilitystate' => 'communityvisibilitystate',
      	'steam_profilestate' => 'profilestate',
      	'steam_personaname' => 'personaname',
      	'steam_lastlogoff'=>'lastlogoff',
      	'steam_profileurl' => 'profileurl',
      	'steam_avatar' => 'avatar',
      	'steam_avatarmedium' => 'avatarmedium',
      	'steam_avatarfull' => 'avatarfull',
      	'steam_personastate' => 'personastate',
      	'steam_realname' => 'realname',
      	'steam_primaryclanid' => 'primaryclanid',
      	'steam_timecreated' => 'timecreated',
      	'steam_uptodate' => 'uptodate',
      	
      	);
      $this->session->set_userdata($data);


	}

	public function logout()
	{
		
        $this->session->sess_destroy();
	}	
}
