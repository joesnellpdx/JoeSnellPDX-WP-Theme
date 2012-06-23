<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */
?><!DOCTYPE html>
<!-- From HTML5 Boilerplate: Consider adding a manifest.appcache: h5bp.com/d/Offline -->

<html <?php language_attributes(); ?>>
<!-- ADD FROM HTM5 BOILERPLATE -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <!-- END ADD -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'joesnellpdx' ), max( $paged, $page ) );

	?></title>
    
    <meta name="viewport" content="width=device-width" />
<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/_ico/apple-touch-icon-57-precomposed.png">
    
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class(); ?>>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->	

  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            
            	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        	
            <!-- <ul class="nav">
               <li class="active">
                <a href="./index.html">Overview</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              <li class="">
                <a href="./components.html">Components</a>
              </li>
              <li class="">
                <a href="./javascript.html">Javascript plugins</a>
              </li>
              <li class="">
                <a href="./less.html">Using LESS</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="">
                <a href="./download.html">Customize</a>
              </li>
              <li class="">
                <a href="./examples.html">Examples</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="jumbotron masthead site-header" role="banner">
		<div class="inner">
        <hgroup>
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a>
			<p><?php bloginfo( 'description' ); ?></p>
            <p class="download-info">
       <a href="https://github.com/joesnellpdx/JoeSnellPDX-WP-Theme" class="btn btn-primary btn-large" >View project on GitHub</a>
      <a href="http://www.joesnellpdx.com/posts/" class="btn btn-large" >View Posts <small>(More on the Way)</small></a>
    </p> 
		</hgroup>
       
        </div>  <!-- .inner -->

		<div class="bs-links">
        <nav role="navigation" class="site-navigation main-navigation">
			<h4 class="assistive-text quick-links"><?php _e( 'Menu', 'joesnellpdx' ); ?></h4>
			<div class="assistive-text skip-link quick-links"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'joesnellpdx' ); ?>"><?php _e( 'Skip to content', 'joesnellpdx' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav>
        </div> <!-- .bs-links -->
	</header><!-- #masthead .site-header -->

	<div id="main">