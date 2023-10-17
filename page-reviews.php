<?php
    /*
        Template Name: Страница отзывы
    */ 
?>

<?php
    get_header();
?>

<section class="main-reviews reviews">
    <div class="reviews__wrapper wrapper">
        <h2 class="reviews__title">Отзывы</h2>
            <ul class="reviews__list">
                
                    <?php
                    // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => 10,
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
                <button class="reviews__button" href="#">Еще</button>
            </div>
        </section>

                <!--   -->
                <section class="reviews__review-form review-form wrapper">
                    <div class="review-form__wrapper">
                        <h3 class="review-form__subtitle">Оставить отзыв</h3>
                        <div class="review-form__form">
                            <?php echo do_shortcode('[contact-form-7 id="5d4392a" title="Форма отправки отзыва"]'); ?>
                        </div>
                    </div>
                    <div class="review-form__img-container">
                        <img class="reviews__image" src="<?php the_field('reviews_image'); ?>" width="375" height="439" alt="Стрела.">
                    </div>
                </section>
                <!--  -->
                
            </div>
        </section>
        <div class="review-form__img-container-mobile">
            <img class="reviews__image-mobile" src="<?php the_field('reviews_image'); ?>/assets/images/car-strela.jpg" width="375" height="439" alt="Стрела.">
        </div>
        <section class="feedback">
            <div class="feedback__bg__decor">
                <div class="feedback__bg__decor__filter">
                    <div class="feedback__forms__wrapper">
                        <div class="contacts__wrapper wrapper">
                            <address class="contacts__address">
                                <h3 class="contacts__title">Контакты</h3>
                                <a class="contacts__link" href="tel:<?php the_field('phone_number_clean', 53); ?>"><?php the_field('phone_number', 53); ?></a>
                                <span class="contacts__area"><?php the_field('city', 53); ?></span>
                                <span class="contacts__time"><?php the_field('working_time', 53); ?></span>
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

<?php
    get_footer();
?>