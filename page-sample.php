<?php
    /*
        Template Name: Шаблон 1
    */ 
?>

<?php
    get_header();
?>

<section class="sample-main__sample sample">
            <div class="sample__wrapper wrapper">
                <div class="sample__container">
                    <h2 class="sample__title"><?php the_field('sample_main_header'); ?></h2>
                    <span class="sample__decor-line"></span>
                </div>
                <img class="sample__image" width="335px" height="200px" src="<?php the_field('sample_image'); ?>" alt="Image.">
                <p class="sample__description"><?php the_field('sample_description_1'); ?>
                </p>
            </div>
        </section>
        <section class="sample2">
            <div class="sample2__wrapper wrapper">
                <h2 class="sample2__title"><?php the_field('sample_sub_header'); ?></h2>
                <p class="sample2__description"><?php the_field('sample_description_2'); ?></p>
            </div>
        </section>
        <section class="services">
            <div class="services__wrapper wrapper">
                <div class="services__container">
                    <h2 class="services__header">Услуги</h2>
                    <span class="services__decor-line"></span>
                </div>
                <ul class="services__list">
                <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'services',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
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
                        }

                        wp_reset_postdata();
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
        <section class="sample-main__sample sample">
            <div class="sample__wrapper wrapper">
                <div class="sample__container">
                    <h2 class="sample__title"><?php the_field('sample_main_header_2'); ?></h2>
                    <span class="sample__decor-line"></span>
                </div>
                <img class="sample__image sample__image--invert" width="335px" height="200px" src="<?php the_field('sample_image_2'); ?>" alt="Image.">
                <p class="sample__description sample__description--invert">
                    <?php the_field('sample_description_2'); ?>
                </p>
            </div>
        </section>
        <section class="image-section">
            <img class="image-section__image" src="<?php the_field('sample_image_full_screen'); ?>" height="500px" alt="adfa.">
            <div class="image-section-wrapper wrapper">
                <p class="image-section__description">
                    <?php the_field('sample_description_3'); ?>
                </p>
            </div>
        </section>

<?php
    get_footer();
?>