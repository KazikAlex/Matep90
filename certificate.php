<?php

/*

 * Template Name: Сертификаты

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

<div class="sertificate">
    <div class="container">
        <div class="sertificate_wrapper">
            <?php $sertificate = new WP_Query(array('post_type' => 'sertificate', 'order' => 'ASC'));?>
            <?php if( $sertificate->have_posts() ) : ?> 
                <?php while ( $sertificate->have_posts() ) : $sertificate->the_post(); ?>
                    <div class="sertificate_item">
                        <div class="sertificate_item_img"><?php the_post_thumbnail('full'); ?></div>
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