<footer class="footer">
        <div class="footer__bg__decor">
            <div class="footer__bg__decor__filter">
                <div class="footer__wrapper wrapper">
                    <nav class="footer__navigation navigation">
                        <ul class="footer__navigation__list">
                            <li class="footer__navigation__item">
                                <a class="footer__navigation__link" href="#">Главная</a>
                            </li>
                            <li class="footer__navigation__item">
                                <a class="footer__navigation__link" href="#">О нас</a>
                            </li>
                            <li class="footer__navigation__item">
                                <p class="footer__navigation__text">Услуги</p>
                                <?php
                                wp_nav_menu( [
                                    'menu'            => 'services_footer',
                                    'container'       => false,
                                    'menu_class'      => 'footer__navigation__services-list footer__navigation-services__list',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'items_wrap'      => '<ul class="footer__navigation__services-list footer__navigation-services__list">%3$s</ul>',
                                    'depth'           => 1,
                                ] );
                            ?> 
                            </li>
                            <li class="footer__navigation__item">
                                <a class="footer__navigation__link" href="#">Отзывы</a>
                            </li>
                            <li class="footer__navigation__item">
                                <a class="footer__navigation__link" href="#">Цена</a>
                            </li>
                            <li class="footer__navigation__item">
                                <a class="footer__navigation__link" href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <address class="footer__address address">
                        <h3 class="address__title">Контакты</h3>
                        <a class="address__link" href="tel:<?php the_field('phone_number_clean', 53); ?>"><?php the_field('phone_number', 53); ?></a>
                        <span class="address__area"><?php the_field('city', 53); ?></span>
                        <span class="address__time"><?php the_field('working_time', 53); ?></span>
                        <p class="address__slogan">Напишите нам, мы онлайн!</p>
                        <ul class="address__list">
                            <li class="address__item">
                                <a class="address__social-link" href="https://wa.me/79094359722">
                                    <img class="address__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/whatsapp-light.svg" width="25" height="25"
                                        alt="Whatsapp.">
                                </a>
                            </li>
                            <li class="address__item">
                                <a class="address__social-link" href="https://t.me/Mishok21">
                                    <img class="address__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/telegram-light.svg" width="25" height="25"
                                        alt="Telegram.">
                                </a>
                            </li>
                            <li class="address__item">
                                <a class="address__social-link" href="viber://chat?number=79094359722">
                                    <img class="address__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/viber-light.svg" width="25" height="25"
                                        alt="Viber.">
                                </a>
                            </li>
                            <li class="address__item">
                                <a class="address__social-link" href="mailto:inf0@ugbetonkrd.ru">
                                    <img class="address__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/icons/mail-light.svg" width="25" height="25"
                                        alt="eMail.">
                                </a>
                            </li>
                        </ul>
                    </address>
                    <div class="footer__requisites requisites">
                        <h2 class="requisites__title">ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ<br> АРТЕМЕНКО МАКСИМ АЛЕКСЕЕВИЧ
                        </h2>
                        <p class="requisites__text">
                            <span class="requisites__item">Расчётный счёт: 40802810130000076642</span>
                            <span class="requisites__item">Банк: КРАСНОДАРСКОЕ ОТДЕЛЕНИЕ N8619 ПАО СБЕРБАНК</span>
                            <span class="requisites__item">БИК: 040349602</span>
                            <span class="requisites__item">Кор. Cчёт: 30101810100000000602</span>
                            <span class="requisites__item">ОГРН: 313236030300020</span>
                            <span class="requisites__item">ИНН: 234403540307</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
        wp_footer();
    ?>
    <!-- <script src="/js/index.js"></script> -->
</body>

</html>