<?php

function covid_style(){
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
}
add_action('wp_enqueue_scripts', 'covid_style');


function covid_menus(){
    $locations = [
        'covid-menu' => esc_html__('Primary Menu', 'covid'),
    ];
    
    register_nav_menus($locations);
}

add_action('init', 'covid_menus');

add_theme_support('post-thumbnails');

function customize($wp_customize){
    $wp_customize->add_section('header_section', [
        'title' => 'section'
    ]);
    $wp_customize->add_setting('header_setting', [
        ''
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_control', [
        'label' => 'add image',
        'section' => 'header_section',
        'settings' => 'header_setting',
        'type' => 'file'
    ]));
}
add_action('customize_register', 'customize');