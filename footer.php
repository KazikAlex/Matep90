







<div class="news">
    <div class="container">
        <div class="news_wrapper">
            <div class="news_title">
                <img class="news_title_img" src="<?php bloginfo( 'template_url' )?>/icons/subscribe.png" alt="subscribe">
                <div class="news_title_text">Хотите всегда быть в курсе наших новостей - ПОДПИШИТЕСЬ!</div>
            </div>
            <form class="news_form" action="mailer/smart.php">
                <input class="news_form_input" type="email" placeholder="Ваш E-mail">
                <input class="news_form_submit" type="submit">
            </form>
        </div>
    </div>
</div>



<div class="contact">
    <?php $contact = new WP_Query(array('post_type' => 'contact'));?>
    <?php if( $contact->have_posts() ) : ?> 
        <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
            <div class="container">
                <div class="contact_wrapper">
                    <div class="contact_block">  
                        <div class="contact_block_left">
                            <!-- <a class="contact_block_left_logo" href="<?php get_home_url()?>/index.php"></a> -->
                            <div class="contact_block_left_logo"></div>
                            <div class="contact_block_left_adress"><?php $adress = get_post_meta( $post->ID, 'adress', true); echo $adress; ?></div>
                        </div>
                        <div class="contact_block_right">
                            <div class="contact_block_right_item">
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
                            <div class="contact_block_right_item">
                                <a href="tel:<?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>" class="header_contact_city-phone">
                                    <?php $phonecity = get_post_meta( $post->ID, 'phonecity', true); echo $phonecity;?>
                                </a>
                            </div>
                            <div class="contact_block_right_item">
                                <a href="whatsapp://send?text=<?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/watsapp.png" alt="watsapp">
                                </a>
                                <a href="viber://chat?number=%2B<?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/viber.png" alt="viber">
                                </a>
                                <a href="tel:<?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>" class="header_contact_city-phone">
                                    <?php $phonemob = get_post_meta( $post->ID, 'phonemob', true); echo $phonemob;?>
                                </a>
                            </div>
                            <br>
                            <div class="contact_block_right_item">
                                <a href="mailto:<?php $maildirector = get_post_meta( $post->ID, 'maildirector', true); echo $maildirector;?>" class="header_contact_social_icon">
                                    <img src="<?php bloginfo( 'template_url' )?>/icons/mail.png" alt="mail">
                                </a>
                                <a href="mailto:<?php $maildirector = get_post_meta( $post->ID, 'maildirector', true); echo $maildirector;?>" class="header_contact_city-phone">
                                    <?php $maildirector = get_post_meta( $post->ID, 'maildirector', true); echo $maildirector;?>
                                </a>
                            </div>
                            <div class="contact_block_right_item">
                                <a href="mailto:<?php $mailmore = get_post_meta( $post->ID, 'mailmore', true); echo $mailmore;?>" class="header_contact_city-phone">
                                    <?php $mailmore = get_post_meta( $post->ID, 'mailmore', true); echo $mailmore;?>
                                </a>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="contact_map">
                <iframe src="<?php $map = get_post_meta( $post->ID, 'map', true); echo $map;?>" width="945" height="325" frameborder="0"></iframe>
                    <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A51f8cb4755a0eada1c6d9a1b2933c23ae3028f71cc1d7f1f0fe4f0c1e123d944&amp;source=constructor" width="945" height="325" frameborder="0"></iframe> -->
                </div>
            </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>Место под слайдер</p>
    <?php endif; ?> 
        <?php wp_reset_query()?> 
</div>





<footer class="footer">
    <div class="footer_copyright">Copyright © 1990-2017 МАТЭП-90. Все права защищены. Карта сайта</div>
</footer>

<script src="<?php bloginfo('template_url')?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-migrate-1.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_url')?>/js/js.js"></script>

</body>
</html>