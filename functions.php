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
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Footer', 'raylight' ),
			'id'            => 'sidebar-footer',
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

	wp_enqueue_script( 'swiper_script', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), '7', true );

	wp_enqueue_script( 'raylight_javascript', get_template_directory_uri() . '/js/js.js', array(), _S_VERSION, true );

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
	$ads_section_1 = get_theme_mod( 'setting_ads_section_1' );
	$ads_section_2 = get_theme_mod( 'setting_ads_section_2' );
	$ads_section_3 = get_theme_mod( 'setting_ads_section_3' );

	if ( $ads == "ads_header" ) {
		echo $ads_header;
	} else if ( $ads == "ads_section_1" ) {
		echo $ads_section_1;
	} else if ( $ads == "ads_section_2" ) {
		echo $ads_section_2;
	} else if ( $ads == "ads_section_3" ) {
		echo $ads_section_3;
	}
}

/**
 * Raylight post thumbnail
 */
function raylight_post_thumbnail() {
	$post_thumbnail = get_the_post_thumbnail_url( get_the_ID() );

	if ( has_post_thumbnail() ) {
		echo '<a href="' . get_permalink() . '"><img src="' . esc_url( $post_thumbnail ) . '" ></a>';
	}
}

/**
 * Raylight post class
 * 
 * @link https://developer.wordpress.org/reference/functions/get_post_class/ 
 */
function raylight_post_class() {
	global $post;
	$get_post_class = get_post_class( '', $post->ID );
	$post_class = esc_attr( implode( ' ', $get_post_class ) );
	echo $post_class;
}

/**
 * If is paged
 */
function raylight_is_paged( $condition ) {
	$var = is_paged() || is_category() || is_tag() || is_search() || is_archive();

	if ( $condition == "display_none" ) {
		if ( $var ) {
			echo 'style="display: none;"';
		}
	} else if ( $condition == "class_paged" ) {
		if ( $var ) {
			echo "paged";
		}
	}
}

/**
 * WordPress Breadcrumbs
 * author: Dimox
 * version: 2019.03.03
 * license: MIT
 *
 * @link http://dimox.net/wordpress-breadcrumbs-without-a-plugin/
 */
function dimox_breadcrumbs() {

    /* === OPTIONS === */
    $text['home']     = 'Home'; // text for the 'Home' link
    $text['category'] = 'Archive by Category "%s"'; // text for a category page
    $text['search']   = 'Search Results for "%s" Query'; // text for a search results page
    $text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
    $text['author']   = 'Articles Posted by %s'; // text for an author page
    $text['404']      = 'Error 404'; // text for the 404 page
    $text['page']     = 'Page %s'; // text 'Page N'
    $text['cpage']    = 'Comment Page %s'; // text 'Comment Page N'

    $wrap_before    = '<div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">'; // the opening wrapper tag
    $wrap_after     = '</div><!-- .breadcrumbs -->'; // the closing wrapper tag
    $sep            = '<span class="breadcrumbs__separator"> / </span>'; // separator between crumbs
    $before         = '<span class="breadcrumbs__current">'; // tag before the current crumb
    $after          = '</span>'; // tag after the current crumb

    $show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
    $show_current   = 0; // 1 - show current page title, 0 - don't show
    $show_last_sep  = 0; // 1 - show last separator, when current page title is not displayed, 0 - don't show
    /* === END OF OPTIONS === */

    global $post;
    $home_url       = home_url('/');
    $link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
    $link          .= '<meta itemprop="position" content="%3$s" />';
    $link          .= '</span>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

    if ( is_home() || is_front_page() ) {

        if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

    } else {

        $position = 0;

        echo $wrap_before;

        if ( $show_home_link ) {
            $position += 1;
            echo $home_link;
        }

        if ( is_category() ) {
            $parents = get_ancestors( get_query_var('cat'), 'category' );
            foreach ( array_reverse( $parents ) as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $cat = get_query_var('cat');
                echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_search() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $show_home_link ) echo $sep;
                echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['search'], get_search_query() ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_year() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_time('Y') . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_month() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_day() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
            $position += 1;
            echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_single() && ! is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $position += 1;
                $post_type = get_post_type_object( get_post_type() );
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
                if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                elseif ( $show_last_sep ) echo $sep;
            } else {
                $cat = get_the_category(); $catID = $cat[0]->cat_ID;
                $parents = get_ancestors( $catID, 'category' );
                $parents = array_reverse( $parents );
                $parents[] = $catID;
                foreach ( $parents as $cat ) {
                    $position += 1;
                    if ( $position > 1 ) echo $sep;
                    echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                }
                if ( get_query_var( 'cpage' ) ) {
                    $position += 1;
                    echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
                    echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
                } else {
                    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                    elseif ( $show_last_sep ) echo $sep;
                }
            }

        } elseif ( is_post_type_archive() ) {
            $post_type = get_post_type_object( get_post_type() );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . $post_type->label . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_attachment() ) {
            $parent = get_post( $parent_id );
            $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
            $parents = get_ancestors( $catID, 'category' );
            $parents = array_reverse( $parents );
            $parents[] = $catID;
            foreach ( $parents as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            $position += 1;
            echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_page() && ! $parent_id ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_title() . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_page() && $parent_id ) {
            $parents = get_post_ancestors( get_the_ID() );
            foreach ( array_reverse( $parents ) as $pageID ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
            }
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_tag() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $tagID = get_query_var( 'tag_id' );
                echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_author() ) {
            $author = get_userdata( get_query_var( 'author' ) );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_404() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . $text['404'] . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( has_post_format() && ! is_singular() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
} // end of dimox_breadcrumbs()

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';
?>