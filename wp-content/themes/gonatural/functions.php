<?php

add_action( 'customize_register', function( $wp_customize ) {
    $wp_customize->remove_section( 'title_tagline');
    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'header_image');
    $wp_customize->remove_section( 'background_image');
    $wp_customize->remove_panel( 'nav_menus');
    $wp_customize->remove_section( 'static_front_page');
    $wp_customize->remove_section( 'custom_css');
}, 50);

function gd_get_option($key, $default = null) {
    return fw_get_db_customizer_option($key, $default);
}

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function gd_eh_array($array, $key, $default = '') {
    echo isset($array[$key]) ? $array[$key] : $default;
}

function gd_get_array($array, $key, $default = '') {
    return isset($array[$key]) ? $array[$key] : $default;
}

function gd_get_asset($path){
    $path = ltrim($path, '/');
    return get_template_directory_uri() . '/assets/' . $path;
}

function gd_get_img($path) {
    $path = ltrim($path, '/');
    return gd_get_asset('img/' . $path);
}

function gd_get_css($path) {
    $path = ltrim($path, '/');
    return gd_get_asset('css/' . $path);
}

function gd_get_static($path) {
    $path = ltrim($path, '/');
    return get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/' . $path;
}

function gd_get_js($path) {
    $path = ltrim($path, '/');
    return gd_get_asset('js/' . $path);
}


add_action( 'wp_enqueue_scripts', function(){
    wp_register_style( 'libs', gd_get_css('libs.min.css'));
    wp_enqueue_style( 'libs' );

    wp_register_style( 'carousel', gd_get_css('owl.carousel.min.css'));
    wp_enqueue_style( 'carousel' );

    wp_register_style( 'carousel-theme', gd_get_css('owl.theme.default.min.css'));
    wp_enqueue_style( 'carousel-theme' );

    wp_register_style( 'main', gd_get_css('main.css'));
    wp_enqueue_style( 'main' );
});

add_action( 'wp_enqueue_scripts', function(){
    wp_register_script(
        'libs',
        gd_get_js('libs.min.js')
    );
    wp_enqueue_script( 'libs' );

    wp_register_script(
        'carousel',
        gd_get_js('owl.carousel.min.js')
    );
    wp_enqueue_script( 'carousel' );

    wp_register_script('main',
        gd_get_js('main.js'),
        array('libs')
    );
    wp_enqueue_script( 'main' );
});

register_nav_menu( "header-nav", "Навигация шапки сайта" );
register_nav_menu( "header-nav-mobile", "Навигация шапки сайта (мобильная версия)" );
//register_nav_menu( "languages-nav", "Список языков" );
//register_nav_menu( "aside-nav", "Сайдбар (боковое меню)" );
//register_nav_menu( "aside-articles", "Сайдбар (список статей)" );
//register_nav_menu( "footer-languages", "Подвал страницы (языки)" );
//register_nav_menu( "footer-services", "Подвал страницы (услуги)" );
register_nav_menu( "footer-top-menu", "Верхнее меню в подвале страницы" );
register_nav_menu( "footer-bottom-menu", "Нижнее меню в подвале страницы" );

