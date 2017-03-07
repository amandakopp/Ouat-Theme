<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo  bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><IMG class="logo" img src="<?php echo bloginfo('template_url');?>/images/ouat_logo_black.svg" alt="logo" height=51 width=107/></a>
        </div>
        
        <div id="navbar" class="navbar-collapse navbar-right collapse container">
	     <?php $defaults = array('menu_class'=> 'nav navbar-nav', 'container' => '',);
			 wp_nav_menu( $defaults );
			?>	 
        </div><!--/.nav-collapse -->
      </div>
    
    </nav>	