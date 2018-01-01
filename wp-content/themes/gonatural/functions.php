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


// хук для регистрации
add_action('init', 'create_taxonomy');
function create_taxonomy(){
    // @todo привести в порядок category
    // список параметров: http://wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy('category', array('blog'), array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'каталоги',
            'singular_name'     => 'каталог',
            'search_items'      => 'Search Genres',
            'all_items'         => 'список каталогов',
            'view_item '        => 'View Genre',
            'parent_item'       => 'Parent Genre',
            'parent_item_colon' => 'Parent Genre:',
            'edit_item'         => 'редактировать',
            'update_item'       => 'опубликовать',
            'add_new_item'      => 'добавить новый каталог',
            'new_item_name'     => 'новый каталог',
            'menu_name'         => 'каталог',
        ),
        'description'           => '', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => null, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => true, // равен аргументу show_ui
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    ) );
}

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('product', array(
        'label' => null,
        'labels' => array(
            'name' => 'продукт', // основное название для типа записи
            'singular_name' => 'продукт', // название для одной записи этого типа
            'add_new' => 'Добавить продукт', // для добавления новой записи
            'add_new_item' => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование продукта', // для редактирования типа записи
            'new_item' => 'Новый продукт', // текст новой записи
            'view_item' => 'Смотреть продукт', // для просмотра записи этого типа.
            'search_items' => 'Искать продукт', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'продукт', // название меню
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

    // @todo привести в порядок посты
    register_post_type('blog', array(
        'label' => null,
        'labels' => array(
            'name' => 'пост', // основное название для типа записи
            'singular_name' => 'пост', // название для одной записи этого типа
            'add_new' => 'Добавить пост', // для добавления новой записи
            'add_new_item' => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование продукта', // для редактирования типа записи
            'new_item' => 'Новый продукт', // текст новой записи
            'view_item' => 'Смотреть продукт', // для просмотра записи этого типа.
            'search_items' => 'Искать продукт', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'продукт', // название меню
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
        'taxonomies' => array('category'),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));

    flush_rewrite_rules();
}