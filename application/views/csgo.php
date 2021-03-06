<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo HTTP_SITE_URL ?>Bulgarian Boosting</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo HTTP_CSS_URL ?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo HTTP_CSS_URL ?>grayscale.css" rel="stylesheet">
    <link href="<?php echo HTTP_CSS_URL ?>csgo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo HTTP_CSS_URL ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-gamepad"></i>  <span class="light">CS-GO</span> Bulgarian Boosting
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#boosters">Boosters</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacts</a>
                    </li>
                        
                    <li>
                      <?php if(isset($personaname)):?>
        <?php echo $personaname;?>
        <?php else : ?>
        <?php echo $form;?>

    <?php endif;?>
  
                   </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">CS-GO Boosting</h1>
                        <p class="intro-text">First Bulgarian CS-GO boosting platform. <br></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Bulgarian Boosting</h2>
               <p>CS:GO Bulgarian Boosting is web site wich will help you to get out off the rank you are stuck in. We will have at least 10 boosters.Every devision will <br>cost you
               different prices. Down you will see our top 3 boosters.<br>Your keys/skins will be saved in SteamBot wich won't give<br> them to the booster untill the boost is fully 
               completed.<br> Our boosters are bulgarians.They are honest<br> and will take you out!</p>
            </div>
        </div>
    </section>

    <!-- Boosters Section -->                                                                              
    <section id="boosters" class="container" >

      <h2 class="boosterstitle">Top Boosters</h2>

      <div class="container">
        <div class="col-sm-4" id="tbp" >
         <h4>Strike</h4>
         <img src="<?php echo base_url();?>assets\img\1.jpg">
         <ul class="stat">
          <li>Reputation:12</li>
          <li>Clients:4</li>
          <li>Happy Clients:3</li>
          <li>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#first">Profile</button>
          <button type="button" class="btn btn-info btn-lg" onclick="myFunction()" >Order</button></li>
         </ul>
         <div class="modal fade" id="first" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Strike</h4>
        </div>
        <div class="modal-body">
          <ul class="stat">
           <li>Reputation:12</li>
           <li>Clients:4</li>
           <li>Happy Clients:3</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-modal close btn-lg"  data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
     <script>
function myFunction() {
    alert("Your order was sent. Please check your email.");}
</script>
  </div>

        </div>
        <div class="col-sm-4" id="tbp" >
         <h4>Sasho</h4> 
         <img src="<?php echo base_url();?>assets\img\2.jpg">
         <ul class="stat">
          <li>Reputation: 5</li>
          <li>Clients: 4</li>
          <li>Happy Clients: 2</li>
          <li>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#first">Profile</button>
          <button type="button" class="btn btn-info btn-lg" onclick="myFunction()" >Order</button></li>         </ul>                       
        </div>
        <div class="col-sm-4" id="tbp" >
         <h4>Titan</h4> 
         <img src="<?php echo base_url();?>assets\img\4.jpg"> 
         <ul class="stat">
          <li>Reputation: 3</li>
          <li>Clients: 3</li>
          <li>Happy Clients: 2</li>
          <li>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#first">Profile</button>
          <button type="button" class="btn btn-info btn-lg" onclick="myFunction()" >Order</button></li>
         </ul>                       
        </div>
      
    </div>
      <div class="alb">
         <a href="<?php echo site_url('all'); ?>" >All boosters</a>
         </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contacts</h2>
                <p>If there is some kind of a problem, or you want to say how good are our favors, email us.</p>
                <p><a href="mailto:boosting.bulgaria@abv.bg">boosting.bulgaria@abv.bg</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/BGboosting?ref=aymt_homepage_panel"
                        target="_blank" class="btn btn-primary btn-lg"><i class="fa fa-facebook-official fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCnHPy9ezziHn8iMuNsdph9g" class="btn btn-primary btn-lg"><i class="fa fa-youtube-play"></i> <span class="network-name">Youtube</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-primary btn-lg"><i class="fa fa-twitter"></i> <span class="network-name">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section >

    
    <div class="contact"></div>

   
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; BugarianBoosting.com 2015</p>
        </div>

    

    
    </footer>

    <!-- jQuery -->
    <script src="<?php echo HTTP_JS_URL ?>jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo HTTP_JS_URL ?>bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo HTTP_JS_URL ?>jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo HTTP_JS_URL ?>grayscale.js"></script>

</body>

</html>
