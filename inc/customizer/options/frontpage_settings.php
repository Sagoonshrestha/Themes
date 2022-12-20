<?php
// $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
// $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
// $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';


// //$wp_customize->add_section('my_theme_frontpage_settings',array('title'=>__('expernce','my_theme'),'priority'=>30));
$wp_customize->add_section( 'my_theme_frontpage_settings', array(
    'title' => __( 'Front Page Settings', 'my_theme' ),
    'priority' => 20
) );

// // Enable Single Page Nav
$wp_customize->add_setting( 'first_name', array( 'default' => 'Hey!', 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'first_name', array(
    'label' => esc_html__( 'First Name', 'my_theme' ),
    'type' => 'text',
    'section' => 'my_theme_frontpage_settings',
) );
// $wp_customize->add_control(
// 	'blogname',
// 	array(
// 		'label'   => __( 'Site Title' ),
// 		'section' => 'my_theme_frontpage_settings',
// 	)
// );
// $wp_customize->add_panel( 'firsttheme_site_settings_panel', array(
//     'title' => __( 'Site Settings', 'firsttheme' ),
//     'priority' => 2
// ) );

// $wp_customize->get_section( 'title_tagline' )->panel = 'firsttheme_site_settings_panel';
// //echo"<pre>";print_r($wp_customize->get_section( 'title_tagline' ));die();
// $wp_customize->get_section( 'colors' )->panel = 'firsttheme_site_settings_panel';
// $wp_customize->get_section( 'background_image' )->panel = 'firsttheme_site_settings_panel';  
// $wp_customize->get_section( 'static_front_page' )->panel = 'firsttheme_site_settings_panel';
// // $wp_customize->get_section( 'static_front_page' )->panel = 'firsttheme_site_settings_panel';
// // $wp_customize->add_setting( 'my_theme[color]', array( 'default' => '', 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
// // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'my_theme[color]', array(
// //   'label' => __( 'Accent Color' ),
// //   'section' => 'my_theme_frontpage_settings',
// //   'settings' => 'my_theme[color]'

// // ) ) );
// // $wp_customize->add_panel('some_panel',array(
// //     'title'=>'Panel1',
// //     'description'=> 'This is panel Description',
// //     'priority'=> 10,
// // ));


// // $wp_customize->add_section('section',array(
// //     'title'=>'section',
// //     'priority'=>10,
// //     'panel'=>'some_panel',
// // ));


// // $wp_customize->add_setting('setting_demo',array(
// //     'defaule'=>'a',
// // ));


// // $wp_customize->add_control('contrl_demo',array(
// //     'label'=>'Text',
// //     'type'=>'text',
// //     'section'=>'section',
// //     'settings'=>'setting_demo',
// // ));
// // $wp_customize->add_panel( 'panel_id', array(
// //     'priority' => 300,
// //     'capability' => 'edit_theme_options',
// //     'theme_supports' => '',
// //     'title' => __( 'Next Step', 'textdomain' ),
// //     'description' => __( 'This is the next step.', 'textdomain' ),
// // ) );

// // $wp_customize->add_section( 'section_id', array(
// //     'priority' => 10,
// //     'capability' => 'edit_theme_options',
// //     'theme_supports' => '',
// //     'title' => __( 'Edit Pages', 'textdomain' ),
// //     'description' => '',
// //     'panel' => 'panel_id',
// // ) );

// // $wp_customize->add_setting( 'url_field_id', array(
// //     'default' => '',
// //     'type' => 'theme_mod',
// //     'capability' => 'edit_theme_options',
// //     'transport' => '',
// //     'sanitize_callback' => 'esc_url',
// // ) );
// // $wp_customize->add_control( 'button_id', array(
// //     'type' => 'button',
// //     'settings' => array(), // 👈
// //     'priority' => 10,
// //     'section' => 'section_id',
// //     'input_attrs' => array(
// //         'value' => __( 'Edit Pages', 'textdomain' ), // 👈
// //         'class' => 'button button-primary', // 👈
// //     ),
// // ) );
// // $wp_customize->add_setting('copyright_text', array(
// //     'default' => '2342',
// //     'transport' => 'postMessage'
// // ));
// // $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'copyright_text', array(
// //     'label' => __('Copyright Text', 'healthtech'),
// //     'section' => 'footer_section',
// //     'settings' => 'copyright_text',
// //         )
// //         )
// // );
// // $wp_customize->selective_refresh->add_partial('copyright_text', array(
// //     'selector' => 'span#copy-write', // You can also select a css class
// //     'render_callback' => 'check_copy_right_text',
// // ));

// // function check_copy_right_text(){
// //     echo get_theme_mod('copyright_text');
// //   }
$wp_customize->add_control( 'button_id', array(
    'type' => 'button',
    'settings' => array(), // 👈
    'priority' => 10,
    'section' => 'my_theme_frontpage_settings',
    'input_attrs' => array(
        'value' => __( 'Edit Pages', 'textdomain' ), // 👈
        'class' => 'button button-primary', // 👈
    ),
) );
function script_for_customizer(){
    wp_enqueue_script('customizer_script', get_template_directory_uri().'/assets/js/customize.js',array('jquery' ) ,'',TRUE);

}
add_action( 'customize_controls_enqueue_scripts', 'script_for_customizer');