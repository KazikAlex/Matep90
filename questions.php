<?php

/*

 * Template Name: Вопрос-ответ

*/
?>

<?php get_header(); ?>

<?php if( have_posts() ) : ?>             
        <?php while ( have_posts() ) : the_post();?>
        <div class="contacts_main">
            <div class="container">
                <?php the_breadcrumb() ?>
                <div class="contacts_main_title"><?php the_title(); ?></div>
            </div>
        </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>Место под слайдер</p>
    <?php endif; ?> 


<div class="questions">
    <div class="container">
        <div class="questions_wrapper">
            <?php $questions = new WP_Query(array('post_type' => 'questions', 'posts_per_page' => 4));?>
            <?php if( $questions->have_posts() ) : ?> 
                <?php while ( $questions->have_posts() ) : $questions->the_post(); ?>
                    <div class="questions_item">
                        <div class="questions_item_question">
                            <?php the_title(); ?>
                            <div class="questions_item_qustion_letter"><?php the_excerpt(); ?></div>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 19L20 0H0L10 19Z" fill="#2187C7"/>
                            </svg>
                        </div>
                        <div class="questions_item_answer"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <p>Место под слайдер</p>
            <?php endif; ?> 
            <?php wp_reset_query()?> 
            <div class="pagination">
                <?php 
                    the_posts_pagination(array(
                        //'show_all'     => false, // показаны все страницы участвующие в пагинации
                        'end_size'     => 1,     // количество страниц на концах
                        'mid_size'     => 1,     // количество страниц вокруг текущей
                        'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text'    => __('<'),
                        'next_text'    => __('>'),
                        //'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        //'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        //'screen_reader_text' => __( 'Posts navigation' ),
                    ));
                ?>
            </div> 
        </div>
    </div>
</div>

<?php get_template_part( 'contactmy' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>