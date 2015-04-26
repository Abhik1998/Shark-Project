
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WaterMelon - San Diegans unite against California drought.</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

   <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '393687624156866',
          xfbml      : true,
          version    : 'v2.3'
        });    
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">WaTerMelOn</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#facts">Facts</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Track Your Water Usage</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contacts">Resources</a>
                    </li>
                </ul>
                <div class="fb-like" data-href="https://www.facebook.com/WaTerMelOn2015425" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <header id="top" class="header">
    	<div id="top-content">
			<div class="text-vertical-center">
				<h1><span class="blue">WaTer</span>MelOn</h1>
				<h3>Help end the California drought.</h3>
			</div>
		</div>
    </header>
    <!-- Intro Section -->
    <!-- <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>-->

    <!-- About Section -->
    <section id="facts" class="facts-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Facts About <span class="blue">San Diego</span>'s Water Usage</h1>
                </div>
            </div>
            <div class="row">
        		<div class ="facts-wrapper col-md-3 col-sm-6">
            		<span class="fa-stack fa-4x">
            			<i class="fa fa-circle fa-stack-2x blue"></i>
	            		<i class="fa fa-home fa-stack-1x white"></i>
	            	</span>            		
            		<div class="blue big-font">60%</div> of water usage in San Diego is residential.
        		</div>
				<div class ="facts-wrapper col-md-3 col-sm-6">
            		<span class="fa-stack fa-4x">
            			<i class="fa fa-circle fa-stack-2x blue"></i>
	            		<i class="fa fa-user fa-stack-1x white"></i>
	            	</span>            		
            		<div>An average San Diegan uses <div class="blue big-font">150 gal.</div> of water a day.</div>
        		</div>  
                <div class ="facts-wrapper col-md-3 col-sm-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x blue"></i>
                        <i class="fa fa-tint fa-stack-1x white"></i>
                    </span>                 
                    <div>San Diego's rainfall in 2014 was<div class="blue big-font">49%</div>of normal levels.</div>
                </div>    
                <div class ="facts-wrapper col-md-3 col-sm-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x blue"></i>
                        <i class="fa fa-chevron-down fa-stack-1x white"></i>
                    </span>                 
                    <div>The water supply in San Diego has already been cut by<div class="blue big-font">15%.</div></div>
                </div>                          		
	         </div>
        </div>
    </section>

<php

  if($_SERVER['REQUEST_METHOD']=='POST'){

  $errors= array();
   if (empty($_POST['shower'])){
    $errors[]='Your forgot to enter shower min.';
   }else{
    $fn = trim($POST['shower']);
   }
if (empty($_POST['wash_teeth'])){
    $errors[]='Your forgot to enter shower washteeth.';
   }else{
    $ln = trim($POST['wash_teeth']);
   }
   if (empty($_POST['dishes'])){
    $errors[]='Your forgot to enter dishes min.';
   }else{
    $gn = trim($POST['dishes']);
   }
   if (empty($_POST['toilet'])){
    $errors[]='Your forgot to enter toilet min.';
   }else{
    $hn = trim($POST['toilet']);
   }
   if (empty($_POST['laundry'])){
    $errors[]='Your forgot to enter laundry min.';
   }else{
    $mn = trim($POST['laundry']);
   }

  }
  if (empty($errors)){

  DEFINE ('DB_USER','aztecaweb11');
  DEFINE ('DB_PASSWORD','soccer11!!');
  DEFINE ('DB_HOST','localhost');
  DEFINE ('DB_NAME','book');

  $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR 
  die('Could not connect to MySQL:' . mysqli_connect_error() );

  $sql = "INSERT INTO `book`.`book2` (`shower`, `washteeth`, `dishes`, `toilet`, `laundry`) VALUES ('', '', '', '', ''), ('5', '10', '40', '10', '80');";
  $r= @mysqli_query($dbc, $sql);



  mysqli_close($sql);
  exit();

  }
  }

  
  ?>    
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <h1>How much water did <span class="blue">YOU</span> use today?</h1>
                <div class="col-md-6 col-sm-10 col-md-offset-1">
                    <div id="stats-container">
                        <form action="userinfo.php" method="post">
                            <div class="row">
                              <div class="col-md-4">Showering</div>
                              <div class="col-md-4"><input type="text" name="shower" 
                              value ="<?php if (isset($_POST['shower'])) echo $_POST['$fn']; ?>"/></div><div class="col-md-4">mins</div>    
                            </div>
                            <div class="row">
                              <div class="col-md-4">Flushing Toilets</div>
                              <div class="col-md-4"><input type="text" name="toilet"
                              value ="<?php if (isset($_POST['toilet'])) echo $_POST['$hn']; ?>" />
                              </div><div class="col-md-4">times</div>   
                            </div>
                            <div class="row">
                              <div class="col-md-4">Washing Dishes</div>
                              <div class="col-md-4"><input type="text" name="dishes"
                              value ="<?php if (isset($_POST['dishes'])) echo $_POST['$gn']; ?>" /></div><div class="col-md-4">mins</div>    
                            </div>
                            <div class="row">
                              <div class="col-md-4">Doing Laundry</div>
                              <div class="col-md-4"><input type="text" name="laundry"
                              value ="<?php if (isset($_POST['laundry'])) echo $_POST['$mn']; ?>" /></div><div class="col-md-4">times</div>    
                            </div>
                            <div class="row">
                              <div class="col-md-4">Brushing Teeth</div>
                              <div class="col-md-4"><input type="text" name="wash_teeth"
                              value ="<?php if (isset($_POST['wash_teeth'])) echo $_POST['$ln']; ?>"/></div><div class="col-md-4">mins</div>    
                            </div>    
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" onclick="" class="btn btn-default btn-lg" width="100px">
                                      Submit
                                    </button>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Resources</h1>
                    <div>
                        <ul>
                            <li><a href="http://www.sandiego.gov/water/">San Diego Water</a></li>
                            <li><a href="http://ca.gov/drought/">California Drought News</a></li>
                            <li><a href="http://www.ecotechwater.com/Company/watertrivia.html">Water Trivia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
<footer class="footer"></footer>
</body>

</html>
