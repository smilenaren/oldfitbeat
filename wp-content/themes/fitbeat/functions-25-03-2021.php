<?php
/**
 * fitbeat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fitbeat
 */

if ( ! function_exists( 'fitbeat_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fitbeat_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fitbeat, use a find and replace
		 * to change 'fitbeat' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fitbeat', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


 	/**
	 * Add automatic image sizes
	 */
	if ( function_exists( 'add_image_size' ) ) {

		/**
		 * Grid Thumb Image Thumbnails
		 */
		add_image_size( 'grid-image-thumb-xxl', 728, 728, true );
		add_image_size( 'grid-image-thumb-xl', 487, 487, true );
		add_image_size( 'grid-image-thumb-l', 385, 385, true );
		add_image_size( 'grid-image-thumb-x', 600, 600, true );
		add_image_size( 'grid-image-thumb-xl', 728, 728, true );
		add_image_size( 'grid-image-thumb-sm', 335, 335, true );

		add_image_size( 'l-desktop-thumb', 1280);
		add_image_size( 'ipad-thumb', 850);
		add_image_size( 'mobile-thumb', 633);
	}


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fitbeat' ),
			'menu-2' => esc_html__( 'Secondary', 'fitbeat' ),
			'menu-3' => esc_html__( 'FooterMobile', 'fitbeat' ),
			'menu-4' => esc_html__( 'FAQ', 'fitbeat' ),
			'menu-5' => esc_html__( 'exercise', 'fitbeat' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fitbeat_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fitbeat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fitbeat_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fitbeat_content_width', 640 );
}
add_action( 'after_setup_theme', 'fitbeat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fitbeat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fitbeat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fitbeat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fitbeat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fitbeat_scripts() {
	wp_enqueue_style( 'fitbeat-style', get_stylesheet_uri(), array(), '1.28', 'all' );

	wp_enqueue_script( 'fitbeat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array(), '20151215', true );

	wp_enqueue_script( 'Is In Viewport', get_template_directory_uri() . '/js/isInViewport.js', array(), '20151215', true );

	wp_enqueue_script( 'feather library', get_template_directory_uri() . '/js/featherlight.min.js', array(), '20151215', true );

	wp_enqueue_script( 'feather gallery', get_template_directory_uri() . '/js/featherlight.gallery.min.js', array(), '20151215', true );

	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array(), '1.04', 'all' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fitbeat_scripts' );

add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle) {
	return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function cptui_register_my_cpts() {

	/**
	 * Post Type: Help.
	 */

	$labels = array(
		"name" => __( "Help", "custom-post-type-ui" ),
		"singular_name" => __( "Help", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Help", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "help", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
	);

	register_post_type( "help", $args );

		/**
	 * Post Type: Exercise Guide.
	 */

	$labels = array(
		"name" => __( "Exercise Guide", "custom-post-type-ui" ),
		"singular_name" => __( "Exercise Guide", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Exercise Guide", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "exercise-guide", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
	);

	register_post_type( "exercise-guide", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
	global $post;
	if(is_singular() || is_home()){

		// Get current page URL
		$finalURL = get_permalink();
		$sb_url = urlencode($finalURL);
		//print_r($finalURL);

		// Get current page title
		$sb_title = str_replace( ' ', '%20', get_the_title());

		// Get Post Thumbnail for pinterest
		$sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());

		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
		$bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
		$whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

	   if(!empty($sb_thumb)) {
			$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
		}
		else {
			$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
		}

		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
		$gplusURL ='https://plus.google.com/share?url='.$sb_title.'';

		// Add sharing button at the end of page/page content
		$content .= '<div class="social-box"><div class="social-btn">';
		//$content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span>Share on twitter</span></a>';
		$content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span>Share on facebook</span></a>';
		$content .= '<a class="col-1 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span>Share on WhatsApp</span></a>';
		$content .= '<a class="col-1 sbtn s-mail" href="mailto:?subject='.$sb_title.'&amp;body=Check out this site '.$sb_url.'" title="Share by Email" target="_blank" rel="nofollow"><span>Share by Email</span></a>';
		//$content .= '<a class="col-2 sbtn s-googleplus" href="'.$googleURL.'" target="_blank" rel="nofollow"><span>Google+</span></a>';
		//$content .= '<a class="col-2 sbtn s-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank" rel="nofollow"><span>Pin It</span></a>';
		//$content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span>LinkedIn</span></a>';
		//$content .= '<a class="col-2 sbtn s-buffer" href="'.$bufferURL.'" target="_blank" rel="nofollow"><span>Buffer</span></a>';
		$content .= '</div></div>';

		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};
// Enable the_content if you want to automatically show social buttons below your post.

 //add_filter( 'the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'template-home.php' ) ) {
        $classes[] = 'home';
    }
    return $classes;
}