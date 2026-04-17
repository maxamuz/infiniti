<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infiniti
 */

?>
<!-- Десктопный футер -->
<div class="container container-footer">
    <footer id="colophon" class="site-footer">
        <div id="masthead-footer" class="site-header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $infiniti_description = get_bloginfo('description', 'display');
                if ($infiniti_description || is_customize_preview()) :
                ?>
                    <p class="site-description"><?php echo $infiniti_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation-footer" class="main-navigation" aria-label="<?php esc_attr_e('Footer Navigation', 'infiniti'); ?>">
                <?php
                if (has_nav_menu('menu-1')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'footer-menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                }
                ?>
            </nav><!-- #site-navigation-footer -->

            <div class="call-header">
                <a class="call-header-link" href="tel:+74951234567" aria-label="<?php esc_attr_e('Call us', 'infiniti'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/icon-call.png'; ?>" alt="<?php esc_attr_e('Phone icon', 'infiniti'); ?>">
                </a>
            </div>
        </div><!-- #masthead-footer -->

        <div class="company-info">
            <p class="company-info-item">© Infiniti Market <?php echo date('Y'); ?></p>
            <p class="company-info-item">ИП Иванов Иван Иванович</p>
            <p class="company-info-item">Реквизиты: 4100000000000041</p>
            <a href="#" class="company-info-item">Политика конфиденциальности</a>
        </div>

        <div class="site-info">
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Разработано: %2$s.', 'infiniti'), 'infiniti', '<a href="https://bizsoul.ru/">Маркетинговое агентство BizSoul</a>');
            ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div>

<!-- Мобильный футер -->
<div class="container container-footer-mobile">
    <footer id="colophon-mobile" class="site-footer">
        <div id="masthead-footer-mobile" class="site-header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $infiniti_description = get_bloginfo('description', 'display');
                if ($infiniti_description || is_customize_preview()) :
                ?>
                    <p class="site-description"><?php echo $infiniti_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation-footer-mobile" class="main-navigation" aria-label="<?php esc_attr_e('Footer Mobile Navigation', 'infiniti'); ?>">
                <button class="menu-toggle" aria-controls="footer-menu-mobile" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle menu', 'infiniti'); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="screen-reader-text"><?php esc_html_e('Menu', 'infiniti'); ?></span>
                </button>

                <?php
                if (has_nav_menu('menu-1')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'footer-menu-mobile',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                }
                ?>
            </nav><!-- #site-navigation-footer-mobile -->

            <div class="call-header">
                <a class="phone-link" href="tel:+74951234567" aria-label="<?php esc_attr_e('Call us', 'infiniti'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/icon-call.png'; ?>" alt="<?php esc_attr_e('Phone icon', 'infiniti'); ?>">
                </a>
            </div>
        </div><!-- #masthead-footer-mobile -->

        <div class="company-info">
            <p class="company-info-item">© Infiniti Market <?php echo date('Y'); ?></p>
            <p class="company-info-item">ИП Иванов Иван Иванович</p>
            <p class="company-info-item">Реквизиты: 4100000000000041</p>
            <a href="#" class="company-info-item">Политика конфиденциальности</a>
        </div>

        <div class="site-info">
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Разработано: %2$s.', 'infiniti'), 'infiniti', '<a href="https://bizsoul.ru/">Маркетинговое агентство BizSoul</a>');
            ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon-mobile -->
</div>

</div><!-- #page -->

<!-- Панель cookie-согласия -->
<div class="cookie-consent" id="cookieConsent">
    <div class="cookie-consent-content">
        <p>ООО «Лайнер» использует cookies-файлы и рекомендательные технологии с целью персонализации сервисов и повышения удобства пользования веб-сайтом. Если вы не хотите использовать файлы cookie, измените настройки браузера.
            <a href="#" class="cookie-document-btn" id="cookieDocumentBtn">Узнать подробнее</a>
        </p>
        <div class="cookie-buttons">
            <button class="btn btn-accept" id="acceptCookies">Принять</button>
            <button class="btn btn-decline" id="declineCookies">Отклонить</button>
        </div>
    </div>
</div>

<!-- Всплывающее окно с документом -->
<div class="cookie-document" id="cookieDocument">
    <h2>СОГЛАСИЕ НА ОБРАБОТКУ ФАЙЛОВ COOKIES</h2>

    <p>Продолжая использовать сайт, Вы (субъект персональных данных) даете ООО «Лайнер» (ИНН 7715349748) согласие на обработку файлов cookies и персональных данных (дата и время посещения; сведения об используемом устройстве; IP-адрес, присвоенный Вашему устройству для выхода в Интернет; URL сайта, с которого был осуществлен переход; сведения о местоположении; тип, язык и версию операционной системы и браузера; данные об устройстве; поведенческие факторы (просмотренные страницы, длительность сессии); данные, собираемые посредством агрегаторов статистики посетителей веб-сайтов в целях составление профиля, таргетирования товаров в соответствии с интересами посетителя сайта (субъекта персональных данных), для предоставления товаров, услуг и/или работ и улучшения качества работы сайта и сервисов и подтверждаете, что уведомлены о том, что на сайте используются сервисы веб–аналитики, к сайту подключен сервис Яндекс.Метрика и др., которые также использует файлы cookies.</p>

    <p>Субъект персональных данных вправе запретить своему оборудованию прием этих данных или ограничить прием этих данных. При отказе от получения таких данных или при ограничении приема данных некоторые функции Сайта могут работать некорректно. Субъект персональных данных обязуется сам настроить свое оборудование таким способом, чтобы оно обеспечивало адекватный его желаниям режим работы и уровень защиты данных файлов «cookie», а ООО «Лайнер» не предоставляет технологических и правовых консультаций на темы подобного характера. Если Вы не хотите, чтобы Ваши вышеперечисленные данные обрабатывались, просим отключить обработку файлов cookies и сбор пользовательских данных в настройках Вашего браузера или покинуть сайт.</p>

    <button class="btn btn-accept" id="acceptFromDocument">Принять и закрыть</button>
</div>

<?php wp_footer(); ?>

</body>

</html>