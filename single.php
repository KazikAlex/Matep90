<?php get_header(); ?>

<div class="container">

    <br><br> <div class="breadcrumb"><?php the_breadcrumb() ?></div>

</div> 



<section class="single">
    <div class="container">
        <div class="single_wrapper">       
            <?php if( have_posts() ) : ?>                    
                <?php while ( have_posts() ) : the_post();?>    
                    <!-- <div class="single_title"><?php the_title(); ?></div> -->

                    

                    <div class="stock_item">
                        <div class="stock_item_img">
                            <div class="stock_item_img_thumbnail"><?php the_post_thumbnail('full'); ?></div>
                            <div class="stock_item_img_stock-size"><?php $stocks = get_post_meta( $post->ID, 'stock', true); echo $stocks; ?></div>
                        </div>
                        <div class="stock_item_title"><?php the_title(); ?></div>
                        <div class="stock_item_description"><?php the_content(); ?></div>
                        <!-- <a class="stock_item_more-btn" href="<?php the_permalink(); ?>">Подробнее &nbsp;
                            <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.5H12M12 4.5L8.23684 1M12 4.5L8.23684 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a> -->
                    </div>



                <?php endwhile; ?>
                <?php wp_reset_query()?>            
            <?php else: ?>
            <?php endif; ?>

        </div>

    </div>

</section>



<?php get_footer();?>