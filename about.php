<?php

/*

 * Template Name: О нас

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
        <?php wp_reset_query()?> 
</div>

<div class="sentence">
    <div class="container">
        <div class="sentence_title">Мы предлагаем</div>
        <div class="sentence_wrapper">
            <?php $sentence = new WP_Query(array('post_type' => 'sentence', 'order' => 'ASC'));?>
            <?php if( $sentence->have_posts() ) : ?> 
                <?php while ( $sentence->have_posts() ) : $sentence->the_post(); ?>
                    <div class="sentence_item">
                        <div class="sentence_item_img"><?php the_post_thumbnail('full'); ?></div>
                        <div class="sentence_item_description"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
                <?php wp_reset_query()?> 
        </div>
    </div>
</div>

<?php get_template_part( 'contactmy' ); ?>

<?php get_template_part( 'reviews' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>