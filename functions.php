<?php
/**
 * Joesnellpdx functions and definitions
 *
 * @package Joesnellpdx
 * @since Joesnellpdx 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Joesnellpdx 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_s_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Joesnellpdx 1.0
 */
function _s_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Joesnellpdx, use a find and replace
	 * to change 'joesnellpdx' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'joesnellpdx', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'joesnellpdx' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Joesnellpdx 1.0
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'joesnellpdx' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _s_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/_css/bs.css', '20120619' );
	
	wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/_css/bsrs.css', '20120619' );
	
	wp_enqueue_style( 'docs', get_template_directory_uri() . '/_css/docs.css', '20120619' );
	
	wp_enqueue_style( 'prettify', get_template_directory_uri() . '/_js/google-code-prettify/prettify.css', '20120619' );

	// wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	
	wp_enqueue_script( 'tw-widgets', 'http://platform.twitter.com/widgets.js', '20120619', true );
	
	wp_enqueue_script( 'prettify', get_template_directory_uri() . '/_js/google-code-prettify/prettify.js', array( 'jquery' ), '20120619'  );
	
	wp_enqueue_script( 'bs-transition', get_template_directory_uri() . '/_js/bs-transition.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-alert', get_template_directory_uri() . '/_js/bs-alert.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-modal', get_template_directory_uri() . '/_js/bs-modal.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-dropdown', get_template_directory_uri() . '/_js/bs-dropdown.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-scrollspy', get_template_directory_uri() . '/_js/bs-scrollspy.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-tab', get_template_directory_uri() . '/_js/bs-tab.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-tooltip', get_template_directory_uri() . '/_js/bs-tooltip.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-popover', get_template_directory_uri() . '/_js/bs-popover.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-button', get_template_directory_uri() . '/_js/bs-button.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-collapse', get_template_directory_uri() . '/_js/bs-collapse.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-carousel', get_template_directory_uri() . '/_js/bs-carousel.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'bs-typeahead', get_template_directory_uri() . '/_js/bs-typeahead.js', array( 'jquery' ), '20120619', true  );
	
	wp_enqueue_script( 'application-js', get_template_directory_uri() . '/_js/application.js', array( 'jquery' ), '20120619', true  );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
