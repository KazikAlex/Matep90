<?php
/*

 * Template Name: Главная

*/
?>

<?php get_header(); ?>

<div class="main"></div>

<div class="stock">
    <div class="container">
        <div class="stock_header">
            <div class="stock_header_title">НАШИ<br><b>АКЦИИ</b></div>
            <a href="<?php echo get_page_link( 24); ?>" class="stock_header_link">Все акции</a>
        </div>
        <div class="stock_wrapper">
            <?php $stock = new WP_Query(array('post_type' => 'stock', 'posts_per_page' => 3 ));?>
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
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
                <?php wp_reset_query()?> 
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="stock_header">
            <div class="stock_header_title">НАШИ<br><b>УСЛУГИ</b></div>
        </div>
        <div class="services_wrapper">

            <a class="services_item" href="<?php echo get_page_link( 16 ); ?>">
                <img class="services_item_background" src="<?php bloginfo( 'template_url' )?>/img/services_see.jpg" alt="services">
                <div class="services_item_name">
                    <div class="services_item_name_icon">
                        <img src="<?php bloginfo( 'template_url' )?>/icons/services_see_icon.png" alt="services">
                    </div>
                    <div class="services_item_name_text">Морские круизы</div>
                </div>
            </a>

            <a class="services_item" href="<?php echo get_page_link( 18 ); ?>">
                <img class="services_item_background" src="<?php bloginfo( 'template_url' )?>/img/services_avia.jpg" alt="services">
                <div class="services_item_name">
                    <div class="services_item_name_icon">
                        <img src="<?php bloginfo( 'template_url' )?>/icons/services_avia_icon.png" alt="services">
                    </div>
                    <div class="services_item_name_text">Авиатуры</div>
                </div>
            </a>

            <a class="services_item" href="<?php echo get_page_link( 20 ); ?>">
                <img class="services_item_background" src="<?php bloginfo( 'template_url' )?>/img/services_individual.jpg" alt="services">
                <div class="services_item_name">
                    <div class="services_item_name_icon">
                        <img src="<?php bloginfo( 'template_url' )?>/icons/services_individual_icon.png" alt="services">
                    </div>
                    <div class="services_item_name_text">Индивидуаальные туры</div>
                </div>
            </a>

            <a class="services_item" href="<?php echo get_page_link( 22 ); ?>">
                <img class="services_item_background" src="<?php bloginfo( 'template_url' )?>/img/services_cruise.jpg" alt="services">
                <div class="services_item_name">
                    <div class="services_item_name_icon">
                        <img src="<?php bloginfo( 'template_url' )?>/icons/services_cruise_icon.png" alt="services">
                    </div>
                    <div class="services_item_name_text">Сопровождение круизов</div>
                </div>
            </a>

        </div>
    </div>
</div>

<?php get_template_part( 'contactmy' ); ?>

<div class="about">
    <div class="container">
        <div class="about_title">О НАШЕЙ<br><b>КОМПАНИИ</br></div>
        <div class="about_description">
            Секрет успешного путешествия заключается в ярких, неповторимых 
            впечатлениях, которые остаются в памяти на долгие годы. И если привычные 
            отели и пансионаты редко способны удивить, то морские круизы Секрет 
            успешного путешествия заключается в ярких, неповторимых впечатлениях, 
            которые остаются в памяти на долгие годы. И если привычные отели и 
            пансионаты редко способны удивить, то морские круизы от компании 
            МАТЭП-90  могут превратить ваш отдых в незабываемое приключение, 
            наполненное увлекательными мероприятиями, открытиями красот 
            всевозможных уголков Земли и, конечно же, чарующим релаксационным 
            морским воздухом.
        </div>
        <a  class="about_link" href="<?php echo get_page_link( 28 ); ?>">Подробнее &nbsp;
            <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4.5H12M12 4.5L8.23684 1M12 4.5L8.23684 8" stroke="#FF830A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <img  class="about_img" src="<?php bloginfo( 'template_url' )?>/img/about.jpg" alt="about">
    </div>
</div>

<?php get_template_part( 'reviews' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>