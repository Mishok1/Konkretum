<?php
    get_header();
?>

        <section class="services">
            <div class="services__wrapper wrapper">
                <div class="services__container">
                    <h2 class="services__header">Услуги</h2>
                    <span class="services__decor-line"></span>
                </div>
                <ul class="services__list">
                    <?php
                    // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'services',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                            <li class="services__item">
                                <img src="<?php the_field('services_image'); ?>" alt="" class="services__image">
                                <p class="services__name"><?php the_title(); ?></p>
                                <p class="services__price"><?php the_field('services_price'); ?></p>
                            </li>
                            <?php

                            // формат вывода the_title() ...
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </ul>
            </div>
        </section>
        <section class="feedback">
            <div class="feedback__bg__decor">
                <div class="feedback__bg__decor__filter">
                    <div class="feedback__forms__wrapper">
                        <div class="contacts__wrapper wrapper">
                            <address class="contacts__address">
                                <h3 class="contacts__title">Контакты</h3>
                                <a class="contacts__link" href="tel:<?php the_field('phone_number_clean'); ?>"><?php the_field('phone_number'); ?></a>
                                <span class="contacts__area"><?php the_field('city'); ?></span>
                                <span class="contacts__time"><?php the_field('working_time'); ?></span>
                                <p class="contacts__slogan">Напишите нам, мы онлайн!</p>
                                <ul class="contacts__list">
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://wa.me/79094359722" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/whatsapp.svg" width="25"
                                                height="25" alt="Whatsapp.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://t.me/Mishok21" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/telegram.svg" width="25"
                                                height="25" alt="Telegram.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://wa.me/79094359722" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/viber.svg" width="25"
                                                height="25" alt="Viber.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="mailto:inf0@ugbetonkrd.ru" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/mail-dark.svg" width="25"
                                                height="25" alt="eMail.">
                                        </a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                        <div class="feedback__wrapper wrapper">
                            <h2 class="feedback__title">Связаться с нами</h2>
                            <form class="feedback__form" action="https://echo.htmlacademy.ru/" method="post">
                                <label class="feedback__label">Имя
                                    <input class="feedback__input" type="text" name="first-name" placeholder="Имя">
                                </label>
                                <label class="feedback__label">Телефон
                                    <input class="feedback__input" type="text" name="phone-number" placeholder="+7 ()">
                                </label>
                                <label class="feedback__label">Адрес электронной почты
                                    <input class="feedback__input" type="text" name="email" placeholder="E-mail">
                                </label>
                                <button class="feedback__submit-button" type="submit">Оставить заявку</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="advantages__wrapper wrapper">
                <!-- slider -->
                <h2 class="advantages__title">Наш автопарк Бетонасосы и бетоносмесители</h2>
                <?php
                    // echo do_shortcode('[smartslider3 slider="2"]');
                ?>
            </div>
        </section>
        <section  class="about">
            <div class="about__wrapper wrapper">
                <h2 id="about" class="about__title"><?php the_field('about_header'); ?></h2>
                <p>
                    <?php the_field('about_main_text'); ?>
                </p>
                <a class="about__button" href="#">Еще</a>
            </div>
        </section>
        <section class="slider-services">
            <div class="slider-services__wrapper wrapper">
                <h2 class="slider-services__title">Услуги бетононасоса и доставка бетона в Краснодаре</h2>
                <span class="slider-services__decor-line"></span>
                <!-- slider#2 -->
            </div>
            <?php
                // global $post;
                // $post = get_post(40);

                // if ($post) {
                //     echo $post->post_content;
                // } else {
                //     echo 'Post not found.';
                // }
            ?>

        </section>
        <section class="reviews">
            <div class="reviews__wrapper wrapper">
                <h2 class="reviews__title">Отзывы</h2>
                <ul class="reviews__list">

                    <?php
                    // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => 4,
                            'category_name'    => 'reviews',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                        setup_postdata( $post );
                    ?>

                    <li class="reviews__item review-card">
                        <h3 class="review-card__title"><?php the_title(); ?></h3>
                        <div class="review-card__rating">
                            <img class="review-card__image" width="20px" height="20px" src="<?php echo bloginfo('template_url'); ?>/assets/images/star.svg"
                                alt="Звезда.">
                            <img class="review-card__image" width="20px" height="20px" src="<?php echo bloginfo('template_url'); ?>/assets/images/star.svg"
                                alt="Звезда.">
                            <img class="review-card__image" width="20px" height="20px" src="<?php echo bloginfo('template_url'); ?>/assets/images/star.svg"
                                alt="Звезда.">
                            <img class="review-card__image" width="20px" height="20px" src="<?php echo bloginfo('template_url'); ?>/assets/images/star.svg"
                                alt="Звезда.">
                            <img class="review-card__image" width="20px" height="20px" src="<?php echo bloginfo('template_url'); ?>/assets/images/star.svg"
                                alt="Звезда.">
                        </div>
                        <p class="review-card__description"><?php the_field('review'); ?></p>
                        <span class="review-card__data"><?php the_field('review_date'); ?></span>
                    </li>

                    <?php

                            // формат вывода the_title() ...
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </ul>
                <a class="reviews__button" href="#">Еще</a>
            </div>
        </section>
        <section class="feedback">
            <div class="feedback__bg__decor">
                <div class="feedback__bg__decor__filter">
                    <div class="feedback__forms__wrapper">
                        <div class="contacts__wrapper wrapper">
                            <address class="contacts__address">
                                <h3 class="contacts__title">Контакты</h3>
                                <a class="contacts__link" href="tel:<?php the_field('phone_number_clean'); ?>"><?php the_field('phone_number'); ?></a>
                                <span class="contacts__area"><?php the_field('city'); ?></span>
                                <span class="contacts__time"><?php the_field('working_time'); ?></span>
                                <p class="contacts__slogan">Напишите нам, мы онлайн!</p>
                                <ul class="contacts__list">
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://wa.me/79094359722" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/whatsapp.svg" width="25"
                                                height="25" alt="Whatsapp.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://t.me/Mishok21" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/telegram.svg" width="25"
                                                height="25" alt="Telegram.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="https://wa.me/79094359722" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/viber.svg" width="25"
                                                height="25" alt="Viber.">
                                        </a>
                                    </li>
                                    <li class="contacts__item">
                                        <a class="contacts__social-link" href="mailto:inf0@ugbetonkrd.ru" target="_blank">
                                            <img class="contacts__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/mail-dark.svg" width="25"
                                                height="25" alt="eMail.">
                                        </a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                        <div class="feedback__wrapper wrapper">
                            <h2 class="feedback__title">Связаться с нами</h2>
                            <div class="feedback__form">
                                <?php echo do_shortcode('[contact-form-7 id="d017405" title="Форма связи"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map" id="map">
            <div class="map__wrapper">
                <h2 class="visually-hidden">Карта</h2>
                <img class="map__image map__image--desktop" src="<?php echo bloginfo('template_url'); ?>/assets/images/map--desktop.jpg" width="1600" height="350px" alt="г.Краснодар, ул. Тихорецкая, 26/1">
                <a class="map__link" href="#header"></a>
            </div>
        </section>
    </main>
   
<?php
    get_footer();
?>