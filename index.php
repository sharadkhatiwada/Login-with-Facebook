<?php  $assets=base_url().'assets/maintenance/'; ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Website Under Maintenance</title>
    
    <link href="<?php echo $assets; ?>css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo $assets; ?>css/coming-soon.css" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Tienne:400,900' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                <img src="<?php echo $assets; ?>images/flags/US.png"/>
                English(US) 
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/NP.png"/> Nepalese</a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/DE.png"/> Deutsch</a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/GB.png"/> English(UK)</a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/FR.png"/> Français</a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/ES.png"/> Español </a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/BR.png"/> Português </a></li>
                <li><a href="#"><img src="<?php echo $assets; ?>images/flags/IT.png"/> Italiano</a></li>
             
              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#"> 
                    <i class="fa fa-facebook-square"></i>
                    Share
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-twitter"></i>
                    Tweet
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-envelope-o"></i>
                    Email
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('<?php echo $assets; ?>images/default.jpg')">

<!--    Change the image source '/images/default.jpg' with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
           <?php  echo $setting-> maintenance_title; ?>
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <h4 class="motto"><?php  echo $setting-> maintenance_msg; ?></h4>
            <div class="subscribe">
                <h5 class="info-text">
                    Subscribe to our newsletters. We keep you posted. 
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control transparent" placeholder="Your email here..." required>
                          </div>
                          <button type="submit" class="btn btn-danger btn-fill">Notify Me</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
             Designed &amp; Developed by <a href="http://www.softechfoundation.com" target="_blank">Softech Team</a>.
      </div>
    </div>
 </div>
 </body>
   <script src="<?php echo $assets; ?>js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="<?php echo $assets; ?>js/bootstrap.min.js" type="text/javascript"></script>

</html>