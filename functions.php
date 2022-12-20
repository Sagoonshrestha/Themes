<?php 
    /**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
$content_width = 800; /* pixels */

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
*/
function myfirsttheme_setup() {

/**
 * Make theme available for translation.
 * Translations can be placed in the /languages/ directory.
 */
load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

/**
 * Add default posts and comments RSS feed links to &lt;head>.
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Enable support for post thumbnails and featured images.
 */
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-background', apply_filters( 'myfirsttheme_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
) ) );

/**
 * Add support for two custom navigation menus.
 */
register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    'secondary' => __('Secondary Menu', 'myfirsttheme' ),
    'footer_menu' => __('Footer Menu', 'myfirsttheme')
) );

/**
 * Enable support for the following post formats:
 * aside, gallery, quote, image, and video
 */
add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );

if(! function_exists('enqueue_script')):
    function enqueue_script(){
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/frontend.js', array ( ), 1.0, true);
        wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
        wp_localize_script('script', 'customtheme_object', array(
            'ajaxurl' => esc_url( admin_url( 'admin-ajax.php' ) ),
            'nonce' => wp_create_nonce( 'ajax_nonce' ),
        ) );
    }
endif;
add_action('wp_enqueue_scripts', 'enqueue_script');

if ( ! function_exists( 'myfirsttheme_custom_logo_setup' ) ) :
    function myfirsttheme_custom_logo_setup() {
        $defaults = array(
            'height'               => 40,
            'width'                => 40,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults );
    }
    endif;
add_action( 'after_setup_theme', 'myfirsttheme_custom_logo_setup' );

add_image_size('blog-large',800,400,false);
add_image_size('blog-small',300,200,true);

add_action('wp_ajax_nopriv_customtheme_front_form_submit_action', 'submit_front_contact_form');
add_action('wp_ajax_customtheme_front_form_submit_action', 'submit_front_contact_form');

require get_template_directory() . '/inc/customizer/customizer.php';