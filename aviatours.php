<?php
/*

 * Template Name: Авиатуры

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

<?php get_template_part( 'search' ); ?>

<?php get_template_part( 'contactmy' ); ?>

<?php get_template_part( 'reviews' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>