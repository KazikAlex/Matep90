<?php

/*

 * Template Name: Контакты

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

<div class="contacts">
    <div class="container">
        <?php $contact = new WP_Query(array('post_type' => 'contact'));?>
            <?php if( $contact->have_posts() ) : ?> 
                <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                    <div class="contacts_main-office">
                        <div class="contacts_main-office_adress">
                            <svg width="17" height="25" viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.91688 0C9.33133 0.0543419 9.7485 0.0869471 10.1548 0.165743C11.7826 0.478209 13.1923 1.21998 14.3893 2.36116C15.4936 3.41267 16.2516 4.67612 16.6769 6.1352C16.9223 6.97479 17.0123 7.83339 16.9987 8.70829C16.9769 9.87936 16.6497 10.9798 16.2597 12.0666C15.6953 13.6453 14.9673 15.1505 14.1357 16.6042C13.5086 17.6992 12.8623 18.7833 12.178 19.843C11.4581 20.9542 10.6892 22.0356 9.92301 23.1198C9.49493 23.7257 9.03412 24.3099 8.58695 24.9022C8.56514 24.9294 8.5406 24.9565 8.50515 25C8.33065 24.7772 8.1616 24.5625 7.99527 24.3452C6.73556 22.685 5.54128 20.9814 4.42881 19.2207C3.49902 17.7535 2.62922 16.2509 1.86576 14.6886C1.225 13.3735 0.671486 12.0259 0.289755 10.613C-0.0483495 9.36583 -0.0947025 8.09966 0.172509 6.83893C0.706933 4.28486 2.11661 2.35844 4.38246 1.06782C5.48675 0.437452 6.68102 0.100533 7.95164 0.0217368C7.99254 0.0190197 8.03072 0.00815129 8.07162 0C8.35519 0 8.63603 0 8.91688 0ZM4.34428 8.46375C4.36882 10.8059 6.23931 12.6073 8.51333 12.6128C10.7955 12.6182 12.6606 10.7597 12.6715 8.46919C12.6797 6.20585 10.8146 4.33105 8.54605 4.3229C6.22295 4.31475 4.34974 6.16237 4.34428 8.46375Z" fill="#003F5A"/>
                            </svg>
                            Адрес нашего офиса:<?php $adress = get_post_meta( $post->ID, 'adress', true); echo $adress; ?>
                        </div>
                        <div class="contacts_main-office_map">
                            <iframe src="<?php $map = get_post_meta( $post->ID, 'map', true); echo $map;?>" frameborder="0"></iframe>
                        </div>
                    </div>

                    <div class="contacts_title">
                        Для того, чтобы получить более полную информацию по турам в отдельные страны, Вы можете 
                        связаться с менеджерами по тел.:
                    </div>

                    <div class="contacts_cruize">
                        <div class="contacts_cruize_title">Морские круизы:</div>
                        <div class="contacts_cruize_wrapper">
                            <div class="contacts_cruize_item"><b>тел.</b><?php $seaTel1 = get_post_meta( $post->ID, 'seaTel1', true); echo $seaTel1; ?></div>
                            <div class="contacts_cruize_item"><?php $seaTel2 = get_post_meta( $post->ID, 'seaTel2', true); echo $seaTel2; ?></div>
                            <div class="contacts_cruize_item"><?php $seaTel3 = get_post_meta( $post->ID, 'seaTel3', true); echo $seaTel3; ?></div>
                            <div class="contacts_cruize_item"><b>моб.</b><?php $seaMob1 = get_post_meta( $post->ID, 'seaMob1', true); echo $seaMob1; ?></div>
                            <div class="contacts_cruize_item"><b>моб.</b><?php $seaMob2 = get_post_meta( $post->ID, 'seaMob2', true); echo $seaMob2; ?></div>
                            <div class="contacts_cruize_item"><?php $seaMob3 = get_post_meta( $post->ID, 'seaMob3', true); echo $seaMob3; ?></div>
                            <div class="contacts_cruize_item"><?php $maildirector = get_post_meta( $post->ID, 'maildirector', true); echo $maildirector; ?></div>
                            <div class="contacts_cruize_item"></div>
                            <div class="contacts_cruize_item"></div>
                        </div>
                    </div>

                    <div class="contacts_avia-cruize">
                        <div class="contacts_avia-cruize_title">Авиатуры Турция, Египет, ОАЭ, Черногория, Болгария, Греция, Индия, Куба, Китай, страны Европы: </div>
                        <div class="contacts_avia-cruize_wrapper">
                            <div class="contacts_cruize_item"><b>тел.</b><?php $aviaTel1 = get_post_meta( $post->ID, 'aviaTel1', true); echo $aviaTel1; ?></div>
                            <div class="contacts_cruize_item"><?php $aviaTel2 = get_post_meta( $post->ID, 'aviaTel2', true); echo $aviaTel2; ?></div>
                            <div class="contacts_cruize_item"><?php $aviaTel3 = get_post_meta( $post->ID, 'aviaTel3', true); echo $aviaTel3; ?></div>
                        </div>
                        <div class="contacts_avia-cruize_description">Подбор индивидуальных туров</div>
                    </div>
                    
                    <div class="contacts_cruize">
                        <div class="contacts_cruize_title">Автобусные туры по Европе, туры выходного дня: </div>
                        <div class="contacts_cruize_wrapper">
                            <div class="contacts_cruize_item"><b>тел.</b><?php $euroTel1 = get_post_meta( $post->ID, 'euroTel1', true); echo $euroTel1; ?></div>
                            <div class="contacts_cruize_item"><?php $euroTel2 = get_post_meta( $post->ID, 'euroTel2', true); echo $euroTel2; ?></div>
                            <div class="contacts_cruize_item"><?php $euroTel3 = get_post_meta( $post->ID, 'euroTel3', true); echo $euroTel3; ?></div>
                            <div class="contacts_cruize_item"><b>моб.</b><?php $euroMob1 = get_post_meta( $post->ID, 'euroMob1', true); echo $euroMob1; ?></div>
                            <div class="contacts_cruize_item"><b>моб.</b><?php $seaMob2 = get_post_meta( $post->ID, 'seaMob2', true); echo $seaMob2; ?></div>
                            <div class="contacts_cruize_item"><?php $euroMob3 = get_post_meta( $post->ID, 'euroMob3', true); echo $euroMob3; ?></div>
                            <div class="contacts_cruize_item"></div>
                            <div class="contacts_cruize_item"></div>
                            <div class="contacts_cruize_item"></div>
                        </div>
                    </div>

                    <div class="contacts_line"></div>

                    <div class="contacts_guest-title">
                        ПРИЕМ ИНОСТРАННЫХ ГОСТЕЙ В БЕЛАРУСИ, ОРГАНИЗАЦИЯ КОРПОРАТИВНЫХ МЕРОПРИЯТИЙ, ОРГАНИЗАЦИЯ ЭКСКУРСИОННЫХ ТУРОВ
                    </div>

                    <div class="contacts_cruize">
                        <!-- <div class="contacts_cruize_title"></div> -->
                        <div class="contacts_quest-cruize_wrapper">
                            <div class="contacts_cruize_item"><b>ВЕЛКОМ: </b><?php $guestVel = get_post_meta( $post->ID, 'guestVel', true); echo $guestVel; ?></div>
                            <div class="contacts_cruize_item"><b>MTC: </b><?php $guestMTS = get_post_meta( $post->ID, 'guestMTS', true); echo $guestMTS; ?></div>
                            <div class="contacts_cruize_item"><b>E-mail: </b><?php $mailmore = get_post_meta( $post->ID, 'mailmore', true); echo $mailmore ; ?></div>
                        </div>
                    </div>

                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
                <?php wp_reset_query()?> 
        
    </div>
</div>

<?php get_template_part( 'contactmy' ); ?>

<?php get_template_part( 'prize' ); ?>

<?php get_footer(); ?>