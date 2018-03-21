<?php
add_theme_support('post-thumbnails');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Opções',
        'menu_title'  => 'Opções',
        'menu_slug'   => 'options',
        'capability'  => 'edit_posts',
        'redirect'    => true
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Banner',
        'menu_title'  => 'Banner',
        'parent_slug' => 'options',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Endereços',
        'menu_title'  => 'Endereços',
        'parent_slug' => 'options',
    ));
}

function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyDQyEcaFhz9fVdN4TMiyKhTSEnnPeI90jA');
}

add_action('acf/init', 'my_acf_init');