<?php

/**
 * Template Name: Страница О нас
 * Description: Шаблон для страницы О нас
 */

get_header();
?>

<main id="primary" class="site-main page-about">

    <section class="hero">
        <div class="wrap hero-grid">
            <div class="reveal">
                <div class="eyebrow">16 лет специализации на Infiniti и Nissan</div>
                <h1>
                    Автосервис, которому можно доверить
                    <span class="accent">Infiniti и Nissan</span>
                </h1>
                <p class="lead">
                    Более 16 лет занимаемся диагностикой, обслуживанием и ремонтом
                    автомобилей. Знаем характерные особенности Infiniti и Nissan,
                    используем профильное оборудование и объясняем каждое решение
                    понятным языком.
                </p>
                <div class="hero-cta">
                    <button
                        class="btn"
                        onclick="
                document
                  .getElementById('contacts')
                  .scrollIntoView({ behavior: 'smooth' })
              ">
                        Записаться на диагностику
                    </button>
                    <span class="note">Ответим и подберём время в течение дня</span>
                </div>
            </div>
            <div class="visual-frame reveal">
                <span class="tag">фото сервиса</span>
                <img src="<?php echo get_template_directory_uri() . '/img/inf1.jpg' ?>" alt="Фото автосервиса" />
                <!-- <svg class="car-glyph" viewBox="0 0 200 100" fill="none">
        <path d="M12 68 L28 40 Q34 32 46 32 L138 32 Q150 32 156 40 L172 68" stroke="#3f8dff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8 68 H176 Q180 68 180 74 V78 H4 V74 Q4 68 8 68Z" stroke="#3f8dff" stroke-width="2"/>
        <circle cx="46" cy="80" r="11" stroke="#63a6ff" stroke-width="2"/>
        <circle cx="140" cy="80" r="11" stroke="#63a6ff" stroke-width="2"/>
        <path d="M56 40 L62 54 H120 L126 40" stroke="#3f8dff" stroke-width="1.4"/>
      </svg> -->
            </div>
        </div>
    </section>

</main>

<?php
// get_sidebar();
get_footer();
