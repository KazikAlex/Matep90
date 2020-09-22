<?php

    include 'metafunction.php';

    // include 'breadcrumb.php';

    add_theme_support('post-thumbnails');

    add_action( 'after_setup_theme', function() { 
        register_nav_menus( [
            'page_menu' => 'Меню страниц',
        ] );
    } );

    add_action( 'init', 'contact' ); 
        function contact() {
            register_post_type('contact', array(
            'public' => true,
            'supports'  => array ('title'),
            'menu_icon' => 'dashicons-location-alt',
            'labels' => array(
                'name' => 'Контакты',
                // 'all_items' => 'Все контакты',
                // 'add_new' => 'Добавить новый',
                // 'add_new_item' => 'Добавить контакт'
            )
        ));
    }

    add_action( 'init', 'stock' ); 
        function stock() {
            register_post_type('stock', array(
            'public' => true,
            'supports'  => array ('thumbnail', 'title', 'editor', 'excerpt'),
            'menu_icon' => 'dashicons-smiley',
            'labels' => array(
                'name' => 'Акции',
                'all_items' => 'Все акции',
                'add_new' => 'Добавить новую',
                'add_new_item' => 'Добавить акцию'
            )
        ));
    }

    add_action( 'init', 'reviews' );
        function reviews() {
            register_post_type('reviews', array(
            'public' => true,
            'supports'  => array ('thumbnail', 'title', 'editor'),
            'menu_icon' => 'dashicons-format-status',
            'labels' => array(
                'name' => 'Отзывы',
                'all_items' => 'Все отзывы',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить отзыв'
                
            )
            ));
        }

    add_action( 'init', 'sentence' );
        function sentence() {
            register_post_type('sentence', array(
            'public' => true,
            'supports'  => array ('thumbnail', 'title', 'editor'),
            'menu_icon' => 'dashicons-media-spreadsheet',
            'labels' => array(
                'name' => 'Предложения',
                'all_items' => 'Все предложения',
                'add_new' => 'Добавить новое',
                'add_new_item' => 'Добавить предложение'
                
            )
        ));
    }

    add_action( 'init', 'sertificate' );
        function sertificate() {
            register_post_type('sertificate', array(
            'public' => true,
            'supports'  => array ('thumbnail', 'title'),
            'menu_icon' => 'dashicons-awards',
            'labels' => array(
                'name' => 'Сертификаты',
                'all_items' => 'Все Сертификаты',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить сертификат'
                
            )
        ));
    }

    add_action( 'init', 'questions' ); 
        function questions() {
            register_post_type('questions', array(
            'public' => true,
            'supports'  => array ('title', 'editor', 'excerpt'),
            'menu_icon' => 'dashicons-smiley',
            'labels' => array(
                'name' => 'Вопрос-ответ',
                'all_items' => 'Все вопрос-ответ',
                'add_new' => 'Добавить новый',
                'add_new_item' => 'Добавить вопрос-ответ'
            )
        ));
    }

    function the_breadcrumb() {
        echo '<div id="breadcrumb"><ul><li><a href="/">Главная</a></li>';

        if ( is_category() || is_single() ) {
            $cats = get_the_category();
            $cat = $cats[0];
            echo '<li><a href="'.get_category_link($cat->term_id).'""'.$cat->name.'</a></li>';
        }

        if(is_single()){
            echo '<li>';
            echo '&nbsp;/&nbsp;';
            the_title();
            echo '</li>';
        }

        if(is_page()){
            echo '<li>';
            echo '&nbsp;/&nbsp;';
            the_title();
            echo '</li>';
        }

        echo '</ul><div class="clear"></div></div>';
    }

?>