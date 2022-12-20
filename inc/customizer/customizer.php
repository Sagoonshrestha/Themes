<?php

defined( 'CUSTOM_THEME_CDIR' ) or define( 'CUSTOM_THEME_CDIR', get_template_directory() . '/inc/customizer/' ); //plugin version
defined( 'CUSTOM_THEME_CURI' ) or define( 'CUSTOM_THEME_CURI', get_template_directory_uri() . '/inc/customizer/' ); //plugin version
if ( !class_exists( 'Custom_Theme_Customizer_Class' ) ) {

    class Custom_Theme_Customizer_Class {

    	/** Custom Theme Customizer Constructor * */
        public function __construct() {

            /** Helper Files * */
            add_action( 'after_setup_theme', array( $this, 'helper_files' ) );

            /** Customizer Options * */
            add_action( 'customize_register', array( $this, 'all_customizer_options' ) );

        }

        /**
         * Customizer Helper Files
         */
        public function helper_files() {

            /** Include Sanitize * */
            require_once CUSTOM_THEME_CDIR . 'includes/sanitize.php';

            /** Include Helper Files * */
            // require_once Accesspress_Parallax_THEME_CDIR . 'includes/helpers.php';
        }

    	/**
         * Customizer Options
         */
        public function all_customizer_options( $wp_customize ) {

            $dir = CUSTOM_THEME_CDIR;

            $files = array(
                'experience_settings',
                'frontpage_settings',
            );

            foreach ( $files as $file ) {
               if ( file_exists( $dir . 'options/' . $file . '.php' ) ) {
                    require_once $dir . 'options/' . $file . '.php';
                }
            }
        }

    }

    new Custom_Theme_Customizer_Class();
}