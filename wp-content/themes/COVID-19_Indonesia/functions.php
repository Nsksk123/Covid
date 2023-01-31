<?php

function styling(){
    wp_enqueue_style('style', get_theme_file_uri('css/covid.css'));
}
add_action('wp_enqueue_scripts', 'styling');


function covid_menus(){
    $locations = [
        'covid-menu' => esc_html__('Primary Menu', 'covid'),
    ];
    
    register_nav_menus($locations);
}

add_action('init', 'covid_menus');

add_theme_support('post-thumbnails');