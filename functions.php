<?php
/**
 * stylus_first functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stylus_first
 */

if ( ! function_exists( 'stylus_first_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function stylus_first_setup() {
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
	* Enable support for custom logo.
	*/
	// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'stylus-first-common', 345, 225, true );
	add_image_size( 'stylus-first-slider', 750, 410, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'meu_menu' => __( 'Menu Principal', 'meu-text-domain' ),
		'primary' => esc_html__( 'Primary', 'stylus-first' ),
		'social'  => esc_html__( 'Social', 'stylus-first' ),
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
	add_theme_support( 'custom-background', apply_filters( 'stylus_first_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add woocommerce support, gallery zoom, lightbox and thumbnail slider.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
endif;
add_action( 'after_setup_theme', 'stylus_first_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stylus_first_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stylus_first_content_width', 708 );
}
add_action( 'after_setup_theme', 'stylus_first_content_width', 0 );


remove_action('init', 'wp_admin_bar_init');
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stylus_first_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stylus-first' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'stylus-first' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'stylus-first' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'stylus-first' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'stylus-first' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Instagram Feeds', 'stylus-first' ),
		'id'            => 'instagram-feeds',
		'description'   => esc_html__( 'Add Instagram Feeds widgets here.', 'stylus-first' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'stylus_first_widgets_init' );


/**
 * Enqueue scripts and styles.
 */

function stylus_first_scripts() {

				wp_enqueue_style('bootstrap.min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

				wp_enqueue_style('fonts-google', 'https://fonts.googleapis.com/css?family=Dosis|Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|PT+Sans|PT+Serif|Quicksand|Roboto|Cinzel|Roboto+Slab');

				wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

				wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');

				wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap-grid.min.css',  array(), '1.1','all');
				
				wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/vendor/icofont/icofont.min.css');

				wp_enqueue_style('min', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css' );

				wp_enqueue_style('dropdow', get_template_directory_uri().'/assets/dropdown/css/style.css' );

				wp_enqueue_style('corousel', get_template_directory_uri().'/assets/vendor/carousel/assets/owl.carousel.min.css' );

				wp_enqueue_style('venobox', get_template_directory_uri().'/assets/vendor/venobox/venobox.css');

				wp_enqueue_style('aos', get_template_directory_uri().'/assets/vendor/aos/aos.css');

				wp_enqueue_style('site-style', get_template_directory_uri().'/assets/css/style.css' );

				wp_enqueue_style('theme', get_template_directory_uri() . '/assets/theme/css/style.css', array(), '1.1','all');

				wp_enqueue_style('reformulated', get_template_directory_uri() . '/assets/css/reformulated.css', array(), '1.1','all');

				wp_enqueue_style('style', get_stylesheet_uri());			
		
			


				

				wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), 1.1, true);

				wp_enqueue_script( 'umd', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), 1.1, true);

				wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), 1.1,true);

				wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js', array('jquery'), 1.1,true);

				wp_enqueue_script( 'carousel', get_template_directory_uri().'/assets/vendor/carousel/owl.carousel.min.js',  array('jquery'), 1.1, true);

				wp_enqueue_script( 'venobox', get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js',  array('jquery'), 1.1, true);

				wp_enqueue_script( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.js',  array('jquery'), 1.1, true);

				wp_enqueue_script( 'dropdow', get_template_directory_uri().'/assets/dropdown/js/script.min.js',  array('jquery'), 1.1, true);

				wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/theme/js/script.js');

				wp_enqueue_script( 'boots', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',  array('jquery'), 1.1,true);

				wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js', array('jquery'), 1.1,true);

				wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js',  array('jquery'), 1.1,true);

				wp_enqueue_script( 'js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array('jquery'), 1.1, true);

				wp_enqueue_script( 'js-404', get_template_directory_uri() . '/assets/js/js-404.js', array('jquery'), 1.1,true);
		
				wp_enqueue_script( 'data', get_template_directory_uri() . '/data/loading-data.js');
				
				wp_enqueue_script( 'site-js', get_template_directory_uri().'/assets/js/main.js',  array('jquery'), 1.1, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stylus_first_scripts' );

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/main.php';
