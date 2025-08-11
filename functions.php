<?php
$version = '1.1.3';
 // правильный способ подключить стили и скрипты темы
 add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

 // добавляет возможность выбрать кастомныи лого из админки
add_theme_support( 'custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support( 'custom-logo');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support( 'post-thumbnails', array('post'));


 function theme_add_scripts() {
    global $version;
    // подключаем файл baguetteBox.css
    wp_enqueue_style( 'baguetteBox-css', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');

    // подключаем файл fontello.css
    wp_enqueue_style( 'fontello-css', get_template_directory_uri() . '/assets/css/fontello.css');

    // подключаем файл fonts.css
    wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/css/fonts.css');

    // подключаем файл normalize.css
    wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css');

    // подключаем файл swiper-bundle.min.css
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version);

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // подключаем js файл baguetteBox
      wp_enqueue_script( 'baguetteBox', get_template_directory_uri() .
        '/assets/js/baguetteBox.min.js', false, null, 'footer' );

        // подключаем js файл list.min.js
       wp_enqueue_script( 'list', get_template_directory_uri() .
       '/assets/js/list.min.js', false, null, 'footer' );


    // подключаем js файл masonry.pkgd.min.js
        wp_enqueue_script( 'masonry', get_template_directory_uri() .
        '/assets/js/masonry.pkgd.min.js', false, null, 'footer' );

    // подключаем js файл swiper-bundle.min.js
        wp_enqueue_script( 'swiper', get_template_directory_uri() .
        '/assets/js/swiper-bundle.min.js', false, null, 'footer' );

    // подключаем основной script.js файл
    // wp_enqueue_script( '', get_template_directory_uri() .
    // '/assets/js/script.js', false, null, 'footer' );
    // Подключаем основной script.js файл
    wp_enqueue_script(
        'main-script', // Обязательный уникальный идентификатор
        get_template_directory_uri() . '/assets/js/script.js',
        array(), // Зависимости (false заменяем на пустой массив)
        $version, // Передаем переменную с версией
        true // 'footer' заменяем на true для вывода в подвале
    );
}

function add_menu() {
    register_nav_menu( 'top', 'главное меню сайта' );
    register_nav_menu( 'mobile', 'мобильное меню' );
}
?>