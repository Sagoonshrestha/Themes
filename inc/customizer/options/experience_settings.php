<?php
// echo "<pre>";print_r($wp_customize);echo"</pre>";die();
$wp_customize->add_section( 'my_theme_experience_settings', array(
    'title' => __( 'Experience', 'my_theme' ),
    'priority' => 20
) );
$wp_customize->add_setting( 'my_theme[company]', array( 'default' => 'ABC', 'type' => 'theme', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'my_theme[company]', array(
    'label' => esc_html__( 'Company', 'my_theme' ),
    'type' => 'text',
    'section' => 'my_theme_experience_settings',
) );
$wp_customize->add_setting( 'my_theme[jobtitle]', array( 'default' => 'ABC', 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'my_theme[jobtitle]', array(
    'label' => esc_html__( 'Job Title', 'my_theme' ),
    'type' => 'text',
    'section' => 'my_theme_experience_settings',
) );
$wp_customize->add_setting( 'my_theme[startdate]', array('type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'my_theme[startdate]', array(
    'label' => esc_html__( 'Start Date', 'my_theme' ),
    'type' => 'date',
    'section' => 'my_theme_experience_settings',
) );
$wp_customize->add_setting( 'my_theme[enddate]', array('type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'my_theme[enddate]', array(
    'label' => esc_html__( 'End Date', 'my_theme' ),
    'type' => 'date',
    'section' => 'my_theme_experience_settings',
) );
$wp_customize->add_setting( 'C', array( 'default' => 'This is description', 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control(
        'my_theme[description]', array(
    'label' => esc_html__( 'Description', 'my_theme' ),
    'type' => 'textarea',
    'section' => 'my_theme_experience_settings',
) );

// $wp_customize->add_setting( 'my_theme[button_id]', array( 'default' => 'This is description', 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
$wp_customize->add_control( 'my_theme[button_id]', array(
    'type' => 'button',
    'settings' => array(), 
    'priority' => 10,
    'section' => 'my_theme_experience_settings',
    'input_attrs' => array(
        'value' => __( 'Add Entry', 'textdomain' ), 
        'class' => 'button button-primary', 
    ),
) );


?>