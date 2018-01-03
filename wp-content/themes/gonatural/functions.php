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

function gd_get_post_option($key, $postId = false) {
    if(!$postId) {
        $postId = get_the_ID();
    }
    return fw_get_db_post_option($postId, $key);
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


add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('product', array(
        'label' => null,
        'labels' => array(
            'name' => 'Продукты', // основное название для типа записи
            'singular_name' => 'Продукт', // название для одной записи этого типа
            'add_new' => 'Добавить продукт', // для добавления новой записи
            'add_new_item' => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование продукта', // для редактирования типа записи
            'new_item' => 'Новый продукт', // текст новой записи
            'view_item' => 'Смотреть продукт', // для просмотра записи этого типа.
            'search_items' => 'Искать продукт', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Продукты', // название меню
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => null,
        'exclude_from_search' => null,
        'show_ui' => null,
        'show_in_menu' => true, // показывать ли в меню адмнки
        'show_in_admin_bar' => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus' => null,
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => array('title', 'editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));

    flush_rewrite_rules();
}



add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 337, 200, true); // добавляем еще один размер картинкам 400x400 с обрезкой
add_image_size('slider-thumb', 780, 460, true); // добавляем еще один размер картинкам 400x400 с обрезкой