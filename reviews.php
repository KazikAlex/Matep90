<div class="reviews">
    <div class="container">
        <div class="stock_header">
            <div class="stock_header_title">НАШИ<br><b>ОТЗЫВЫ</b></div>
            <!-- <a href="<?php echo get_page_link( 24); ?>" class="stock_header_link">Все акции</a> -->
        </div>
        <div class="reviews_wrapper">
            <?php $reviews = new WP_Query(array('post_type' => 'reviews' ));?>
            <?php if( $reviews->have_posts() ) : ?> 
                <?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
                    <div class="reviews_item">
                        <div class="reviews_item_header">
                            <div class="reviews_item_header_img"><?php the_post_thumbnail('full'); ?></div>
                            <div class="reviews_item_header_name">
                                <div class="reviews_item_header_name_user"><?php the_title(); ?></div>
                                <div class="reviews_item_header_name_cruise"><?php $cruise = get_post_meta( $post->ID, 'cruise', true); echo $cruise; ?></div>
                            </div>
                        </div>
                        <div class="reviews_item_description"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
                <?php wp_reset_query()?>     
        </div>
        <div class="reviews_btn">
            <div class="prev_btn"></div>
            <div class="middle_btn"></div>
			<div class="next_btn"></div>
        </div>
    </div>
</div>