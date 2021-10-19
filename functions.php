<?php
/**
 * raylight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package raylight
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'raylight_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function raylight_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on raylight, use a find and replace
		 * to change 'raylight' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'raylight', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in 3 location.
		register_nav_menus(
			array(
				'menu-slide' => esc_html__( 'Menu slide', 'raylight' ),
				'main-menu' => esc_html__( 'Main menu', 'raylight' ),
				'footer-menu' => esc_html__( 'Footer menu', 'raylight' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'raylight_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 'auto',
				'width'       => 200,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'raylight_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raylight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raylight_content_width', 1040 );
}
add_action( 'after_setup_theme', 'raylight_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raylight_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'raylight' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Tambahkan widget disini.', 'raylight' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raylight_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function raylight_scripts() {
	wp_enqueue_style( 'raylight_style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );

	wp_enqueue_style( 'raylight_main_style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );

	wp_enqueue_style( 'swiper_style', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), '7' );

	wp_enqueue_style( 'fontawesome_style', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );

	wp_enqueue_script( 'raylight_jquery', get_template_directory_uri() . '/js/js-jquery.js', array( 'jquery' ), _S_VERSION, true );

	wp_enqueue_script( 'raylight_javascript', get_template_directory_uri() . '/js/js.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'swiper_script', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), '7', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raylight_scripts' );

/**
 * Raylight custom logo
 * 
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 */
function raylight_custom_logo() {
	
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

	if ( has_custom_logo() ) {
		echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
	} else {
		echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . bloginfo( 'name' ) . '</a></h1>';
	}
}

/**
 * Raylight social media url
 */
function social_media_url( $social_media ) {
	$fb = get_theme_mod( 'facebook_url' );
	$tw = get_theme_mod( 'twitter_url' );
	$ig = get_theme_mod( 'instagram_url' );
	$yt = get_theme_mod( 'youtube_url' );

	if ( $social_media == "facebook_url" ) {
		echo esc_url( $fb );
	} else if ( $social_media == "twitter_url" ) {
		echo esc_url( $tw );
	} else if ( $social_media == "instagram_url" ) {
		echo esc_url( $ig );
	} else if ( $social_media == "youtube_url" ) {
		echo esc_url( $yt );
	}
}

/**
 * Raylight advertisement code
 */
function raylight_ads_code( $ads ) {
	$ads_header = get_theme_mod( 'setting_ads_header' );

	if ( $ads == "ads_header" ) {
		echo $ads_header;
	}
}

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';
?>