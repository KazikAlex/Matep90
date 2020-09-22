<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>МАТЭП-90</title>
</head>
<body>
    
    <header class="header">
        <div class="hamburger-menu">
            <?php wp_nav_menu(array('theme_location' => 'page_menu', 'depth' => 0, 'menu_id' => 'page-menu')); ?>
            <div class="header_question">
                <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.04861 6.94955C2.67373 6.74535 1.34954 6.55352 0 6.35551C0.0633585 5.55108 0.285113 4.82709 0.608242 4.13405C1.41923 2.38905 2.69907 1.11434 4.56181 0.446048C5.67692 0.0438332 6.84272 -0.0613614 8.01485 0.0314574C9.70653 0.167592 11.2271 0.749256 12.545 1.8012C14.129 3.06973 15.0603 4.66002 14.997 6.71441C14.9336 8.96062 13.2546 10.9903 11.2081 11.6276C10.6949 11.7885 10.2261 12.0917 9.76988 12.3825C9.35805 12.6424 9.39607 13.1189 9.33905 13.5273C9.32004 13.6882 9.33271 13.8553 9.33271 14.0471C7.9705 14.0471 6.63997 14.0471 5.21441 14.0471C5.27777 13.5273 5.31578 13.0013 5.41082 12.4815C5.77196 10.4952 7.0518 9.2267 8.83218 8.3604C9.19966 8.18095 9.59248 8.051 9.94729 7.85299C10.2451 7.68591 10.5302 7.48171 10.7836 7.25276C11.1194 6.94955 11.1764 6.5659 11.018 6.14512C10.6442 5.16124 9.91561 4.53007 8.91454 4.2083C7.76775 3.84322 6.63364 3.83084 5.56921 4.48676C4.81525 4.96323 4.4541 5.70578 4.20067 6.50402C4.14998 6.65253 4.0993 6.79485 4.04861 6.94955Z" fill="#2187C7"/>
                    <path d="M9.11749 20.0001C7.76162 20.0001 6.43109 20.0001 5.08789 20.0001C5.08789 18.682 5.08789 17.3826 5.08789 16.0583C6.43109 16.0583 7.76162 16.0583 9.11749 16.0583C9.11749 17.3702 9.11749 18.6758 9.11749 20.0001Z" fill="#2187C7"/>
                </svg>
                <a href="<?php echo get_page_link( 98 ); ?>" class="header_question_link">Вопрос-ответ</a>
            </div>
            <div class="header_contact">
                <?php $contact = new WP_Query(array('post_type' => 'contact'));?>
                <?php if( $contact->have_posts() ) : ?> 
                    <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                        <div class="header_contact_social">
                            <div class="header_contact_social_wrapper">
                                <a href="tel:<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_phone">
                                    <?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess; ?>
                                </a>
                                <a href="viber://chat?number=%2B<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/viber.png" alt="viber">
                                </a>
                                <a href="tg://resolve?domain=2B<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/telegram.png" alt="telegram">
                                </a>
                                <a href="tel:<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/phone.png" alt="phone">
                                </a>
                            </div> 
                            <a href="tel:<?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>" class="header_contact_city-phone">
                                <?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>
                            </a>
                            <a href="tel:<?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>" class="header_contact_city-phone">
                                <?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>Место под слайдер</p>
                <?php endif; ?> 
            </div>
        </div>
        <div class="container">
            <div class="hamburger">
                <div class="hamburger-top" id="top"></div>
                <div class="hamburger-middle" id="middle"></div>
                <div class="hamburger-bottom" id="bottom"></div>
            </div>
            
            

            <div class="header_wrapper">
                <a class="header_logo" href="<?php get_home_url()?>/index.php"></a>
                <div class="header_contact hidden">
                    <?php $contact = new WP_Query(array('post_type' => 'contact'));?>
                    <?php if( $contact->have_posts() ) : ?> 
                        <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                            <div class="header_contact_social">
                                <div class="header_contact_social_wrapper">
                                    <a href="viber://chat?number=%2B<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                        <img src="<?php bloginfo( 'template_url' )?>/icons/viber.png" alt="viber">
                                    </a>
                                    <a href="tg://resolve?domain=2B<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                        <img src="<?php bloginfo( 'template_url' )?>/icons/telegram.png" alt="telegram">
                                    </a>
                                    <a href="tel:<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_icon">
                                        <img src="<?php bloginfo( 'template_url' )?>/icons/phone.png" alt="phone">
                                    </a>
                                    <a href="tel:<?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess;?>" class="header_contact_social_phone">
                                        <?php $phonemess = get_post_meta( $post->ID, 'phonemess', true); echo $phonemess; ?>
                                    </a>
                                </div> 
                                <a href="tel:<?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>" class="header_contact_city-phone">
                                    <?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>
                                </a>
                                <a href="tel:<?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>" class="header_contact_city-phone">
                                    <?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>
                                </a>
                            </div>
                            <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                            <p>Место под слайдер</p>
                        <?php endif; ?> 
                    </div>
                    <div class="header_question hidden">
                        <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.04861 6.94955C2.67373 6.74535 1.34954 6.55352 0 6.35551C0.0633585 5.55108 0.285113 4.82709 0.608242 4.13405C1.41923 2.38905 2.69907 1.11434 4.56181 0.446048C5.67692 0.0438332 6.84272 -0.0613614 8.01485 0.0314574C9.70653 0.167592 11.2271 0.749256 12.545 1.8012C14.129 3.06973 15.0603 4.66002 14.997 6.71441C14.9336 8.96062 13.2546 10.9903 11.2081 11.6276C10.6949 11.7885 10.2261 12.0917 9.76988 12.3825C9.35805 12.6424 9.39607 13.1189 9.33905 13.5273C9.32004 13.6882 9.33271 13.8553 9.33271 14.0471C7.9705 14.0471 6.63997 14.0471 5.21441 14.0471C5.27777 13.5273 5.31578 13.0013 5.41082 12.4815C5.77196 10.4952 7.0518 9.2267 8.83218 8.3604C9.19966 8.18095 9.59248 8.051 9.94729 7.85299C10.2451 7.68591 10.5302 7.48171 10.7836 7.25276C11.1194 6.94955 11.1764 6.5659 11.018 6.14512C10.6442 5.16124 9.91561 4.53007 8.91454 4.2083C7.76775 3.84322 6.63364 3.83084 5.56921 4.48676C4.81525 4.96323 4.4541 5.70578 4.20067 6.50402C4.14998 6.65253 4.0993 6.79485 4.04861 6.94955Z" fill="#2187C7"/>
                            <path d="M9.11749 20.0001C7.76162 20.0001 6.43109 20.0001 5.08789 20.0001C5.08789 18.682 5.08789 17.3826 5.08789 16.0583C6.43109 16.0583 7.76162 16.0583 9.11749 16.0583C9.11749 17.3702 9.11749 18.6758 9.11749 20.0001Z" fill="#2187C7"/>
                        </svg>
                        <a href="<?php echo get_page_link( 98 ); ?>" class="header_question_link">Вопрос-ответ</a>
                    </div>
                    <button class="header_btn">Заказать звонок</button>
                <!-- </div> -->
            </div>

            <form class="header_form" action="<?php bloginfo(); ?>mailer/smart.php">
                <div class="header_form_close">X</div>
                <div class="header_form_title">Свяжитесь с нами!</div>
                <div class="header_form_subtitle">И мы ответим на все ваши воопросы</div>
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="tel" name="tel" placeholder="Ваш телефон">
                <button class="header_form_btn"type="submit">Заказать звонок</button>
            </form>




            

            <div class="thanks">
                <div class="thanks_wrapper">
                    <div class="thanks_title_close"></div>
                    <div class="thanks_title">Спасибо!</div>
                    <div class="thanks_subtitle">С Вами свяжутся в ближайшее время</div>
                </div>
            </div>

        </div>


            <div class="header_line"></div>

        <div class="container">
            <div class="header_menu">
                <?php wp_nav_menu(array('theme_location' => 'page_menu', 'depth' => 0, 'menu_id' => 'page-menu')); ?>
            </div>
        </div>
    </header>

            

