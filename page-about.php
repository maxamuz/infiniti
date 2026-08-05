<?php

/**
 * Template Name: Страница О нас
 * Description: Шаблон для страницы О нас
 */

get_header();
?>

<main id="primary" class="site-main page-about">

    <!-- ================= HERO ================= -->

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

    <!-- ================= STATS ================= -->
    <section class="stats">
        <div class="wrap">
            <div class="stats-grid reveal">
                <div class="stat-card">
                    <div class="num">16 лет</div>
                    <div class="lbl">опыта в обслуживании и ремонте автомобилей</div>
                </div>
                <div class="stat-card">
                    <div class="num">5 000+</div>
                    <div class="lbl">автомобилей прошли обслуживание в сервисе</div>
                </div>
                <div class="stat-card">
                    <div class="num">Infiniti и Nissan</div>
                    <div class="lbl">профильная специализация команды</div>
                </div>
                <div class="stat-card">
                    <div class="num">Consult III Plus</div>
                    <div class="lbl">
                        оборудование для диагностики Infiniti и Nissan
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section class="about" id="about">
        <div class="wrap about-grid">
            <div class="reveal">
                <div class="eyebrow">О сервисе</div>
                <h2
                    style="
              font-size: clamp(26px, 3vw, 36px);
              font-weight: 700;
              margin-bottom: 20px;
            ">
                    Техническая точность и человеческое отношение
                </h2>
                <p>
                    Infiniti Market Service вырос из любви к японской инженерии и
                    желания сделать ремонт автомобилей более понятным и предсказуемым.
                </p>
                <p>
                    Для нас хороший сервис — это не только устранённая неисправность.
                    Важно, чтобы владелец автомобиля понимал:
                </p>
                <ul class="checklist">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        что именно обнаружено при диагностике
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>какие работы действительно необходимы
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>какие варианты ремонта существуют
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>сколько это будет стоить
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>когда автомобиль будет готов
                    </li>
                </ul>
                <p style="margin-top: 22px">
                    Мы не хотим, чтобы посещение автосервиса превращалось в источник
                    тревоги. Поэтому показываем выявленные неисправности, объясняем
                    рекомендации и согласовываем работы до их начала.
                </p>
            </div>
            <div class="img-master visual-frame reveal" style="aspect-ratio: 4/5">
                <span class="tag">фото мастера</span>
                <img src=" <?php echo get_template_directory_uri() . '/img/master.jpg' ?> " alt="Фото мастера с клиентом" />
                <!-- <svg
            class="car-glyph"
            viewBox="0 0 120 120"
            fill="none"
            style="width: 52%"
          >
            <circle cx="60" cy="38" r="18" stroke="#3f8dff" stroke-width="2" />
            <path
              d="M30 100c0-18 13-30 30-30s30 12 30 30"
              stroke="#3f8dff"
              stroke-width="2"
            />
            <path
              d="M70 55 L84 62"
              stroke="#63a6ff"
              stroke-width="2"
              stroke-linecap="round"
            />
            <rect
              x="82"
              y="58"
              width="14"
              height="9"
              rx="2"
              stroke="#63a6ff"
              stroke-width="1.6"
            />
          </svg> -->
            </div>
        </div>
    </section>

</main>

<?php
// get_sidebar();
get_footer();
