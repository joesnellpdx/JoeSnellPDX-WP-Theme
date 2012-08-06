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
<script type="text/javascript" src="http://use.typekit.com/jrw3qjl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50" <?php body_class('landingbody'); ?>>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->	

    
    <div class="container">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    
	<header id="masthead" class="jumbotron masthead site-header" role="banner">
		<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
       
        <hgroup>
			<div class="logo-head">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.joesnellpdx.com/wp-content/uploads/2012/07/Joe-Snell-Logowhite.png" alt="Joe Snell PDX Logo" width="100%" /></a>
            </div> <!-- .logo-head -->
            <h1 class="brand"><?php bloginfo( 'name' ); ?></br>
			<span class="sub-head"><?php bloginfo( 'description' ); ?></span></h1>
    <div class="landingmenu"><?php wp_nav_menu( array( 'theme_location' => 'landing' ) ); ?></div>
		</hgroup>
       
        </div>  <!-- .inner -->
        </div>  <!-- navbar -->

		<!-- <div class="bs-links">
        <nav role="navigation" class="site-navigation main-navigation">
			<h4 class="assistive-text quick-links"><?php _e( 'Menu', 'joesnellpdx' ); ?></h4>
			<div class="assistive-text skip-link quick-links"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'joesnellpdx' ); ?>"><?php _e( 'Skip to content', 'joesnellpdx' ); ?></a></div>

			 <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
		</nav>
        </div> <!-- .bs-links -->
	<!--</header><!-- #masthead .site-header 

	<div id="main">