<?php

/*

 * Template Name: Акции

*/
?>

<?php get_header(); ?>

<div class="page">
    <?php if( have_posts() ) : ?>             
        <?php while ( have_posts() ) : the_post();?>   
            <div class="page_background"><?php the_post_thumbnail('full'); ?></div>
            <div class="container">
                <?php the_breadcrumb() ?>
                <div class="page_title"><?php the_title(); ?></div>
                <div class="page_subtitle"><?php the_content(); ?></div> 
            </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>Место под слайдер</p>
    <?php endif; ?> 
</div>



<div class="container">
    <div class="page-stock_wrapper">
        <?php $stock = new WP_Query(array('post_type' => 'stock', 'posts_per_page' => 9));?>
            <?php if( $stock->have_posts() ) : ?> 
                <?php while ( $stock->have_posts() ) : $stock->the_post(); ?>
                    <div class="stock_item">
                        <div class="stock_item_img">
                            <a class="stock_item_img_thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                            <div class="stock_item_img_stock-size"><?php $stocks = get_post_meta( $post->ID, 'stock', true); echo $stocks; ?></div>
                        </div>
                        <div class="stock_item_title"><?php the_title(); ?></div>
                        <div class="stock_item_description"><?php the_excerpt(); ?></div>
                        <a class="stock_item_more-btn" href="<?php the_permalink(); ?>">Подробнее &nbsp;
                            <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.5H12M12 4.5L8.23684 1M12 4.5L8.23684 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query()?> 
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 

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

<!-- </div> -->

</div>

<?php get_template_part( 'contactmy' ); ?>

<?php get_template_part( 'reviews' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>