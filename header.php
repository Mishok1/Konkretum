<!DOCTYPE html>
<html class="page" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЮГ Бетон</title>
    <?php wp_head(); ?>
</head>

<body class="page__body">
    <header class="header" id="header">
        <div class="header__wrapper wrapper">
            <div class="header__container">
                <a class="header__logo-link" href="<?php echo get_home_url(); ?>">
                    <img class="header__logo" src="<?php echo bloginfo('template_url'); ?>/assets/images/main-logo.svg" width="174" height="40" alt="ЮГ БЕТОН.">
                </a>
                <span class="header__slogan">Работаем с 2011 года</span>
                <span class="header__description">Надежный партнер в строительстве</span>
            </div>
            <ul class="header__list">
                <li class="header__item">
                    <a class="header__link" href="<?php the_field('social_link_telegram'); ?>" target="_blank">
                        <img class="header__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/telegram.svg" width="25" height="25"
                            alt="Telegram.">
                    </a>
                </li>
                <li class="header__item">
                    <a class="header__link" href="<?php the_field('social_link_whatsapp'); ?>" target="_blank">
                        <img class="header__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/whatsapp.svg" width="25" height="25"
                            alt="Whatsapp.">
                    </a>
                </li>
                <li class="header__item">
                    <a class="header__link" href="<?php the_field('social_link_viber'); ?>" target="_blank">
                        <img class="header__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/viber.svg" width="25" height="25" alt="Viber.">
                    </a>
                </li>
                <li class="header__item">
                    <a class="header__link" href="mailto:<?php the_field('mail'); ?>" target="_blank">
                        <img class="header__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/mail.svg" width="25" height="25" alt="eMail.">
                    </a>
                </li>
            </ul>
            <button class="header__button">
                <span class="visually-hidden">Навигация</span>
                <span class="header__button__dec-line"></span>
            </button>
            <nav class="header__navigation navigation">
                <ul class="navigation__list navigation__list--opened">
                    <li class="navigation__item">
                        <a class="navigation__link" href="<?php echo get_home_url(); ?>">Главная</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="<?php echo get_home_url(); ?>/o-nas">О нас</a>
                    </li>
                    <li class="navigation__item">
                        <p class="navigation__text">Услуги</p>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'services',
                                    'container'       => false,
                                    'menu_class'      => 'navigation__services-list navigation-services__list navigation__services__list--opened',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'items_wrap'      => '<ul class="navigation__services-list navigation-services__list navigation__services__list--opened">%3$s</ul>',
                                    'depth'           => 1,
                                ] );
                            ?> 
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="<?php echo get_home_url(); ?>/otzyvy">Отзывы</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="<?php echo get_home_url(); ?>/czeny">Цена</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="<?php echo get_home_url(); ?>/kontakty">Контакты</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link address__wrapper" href="#map">
                            <img class="navigation__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/map_point.svg" alt="Иконка метки на карте."
                                width="15" height="15">
                            <span class="navigation__address">Краснодар</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <h1 class="visually-hidden">Sample</h1>
        <section class="hero">
            <div class="hero__wrapper wrapper">
                <h2 class="visually-hidden">Описание компании</h2>
                <address class="hero__address address">
                    <h3 class="address__title">Всегда на связи</h3>
                    <a class="address__link" href="tel:<?php the_field('phone_number_clean', 53); ?>"><?php the_field('phone_number', 53); ?></a>
                    <span class="address__area"><?php the_field('city', 53); ?></span>
                    <span class="address__time"><?php the_field('working_time', 53); ?></span>
                </address>
                <div class="hero__container">
                    <img class="hero__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/main-logo.svg" width="335" height="78" alt="ЮГ БЕТОН.">
                    <h3 class="hero__title">Юг бетон - С 2011 года ваш надежный подрядчик в строительстве! Работаем по
                        всему Краснодарскому краю.</h3>
                    <p class="hero__description">Услуги бетононасоса и доставка бетона в Краснодарском крае</p>
                </div>
            </div>
        </section>