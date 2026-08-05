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

    <!-- ================= REASONS ================= -->
    <section class="reasons">
        <div class="wrap">
            <div class="reasons-head reveal">
                <div>
                    <div class="eyebrow">6 причин</div>
                    <div class="display-big">
                        <h2>Почему владельцы<br />выбирают нас</h2>
                    </div>
                </div>
            </div>
            <div class="reasons-list">
                <div class="reason-row reveal">
                    <div class="reason-num">01</div>
                    <div class="reason-body">
                        <h3>Специализация на Infiniti и Nissan</h3>
                        <p>
                            Годы работы с этими автомобилями помогают нам быстрее находить
                            характерные неисправности, учитывать особенности конкретных
                            моделей и подбирать подходящую технологию ремонта.
                        </p>
                    </div>
                </div>
                <div class="reason-row reveal">
                    <div class="reason-num">02</div>
                    <div class="reason-body">
                        <h3>Профильная диагностика</h3>
                        <p>
                            Используем Consult III Plus и другое профессиональное
                            оборудование для проверки электронных систем, чтения ошибок,
                            проведения адаптаций и поиска причин неисправности. Оборудование
                            не заменяет специалиста: результаты анализирует мастер, знакомый
                            с особенностями Infiniti и Nissan.
                        </p>
                    </div>
                </div>
                <div class="reason-row reveal">
                    <div class="reason-num">03</div>
                    <div class="reason-body">
                        <h3>Прозрачное согласование</h3>
                        <p>
                            До начала ремонта объясняем, что обнаружено, какие работы
                            рекомендуются и сколько они будут стоить. Дополнительные
                            операции проводим только после согласования. Если возможны
                            разные варианты решения — расскажем об их преимуществах,
                            ограничениях и стоимости.
                        </p>
                    </div>
                </div>
                <div class="reason-row reveal">
                    <div class="reason-num">04</div>
                    <div class="reason-body">
                        <h3>Запчасти без лишнего ожидания</h3>
                        <p>
                            На собственном складе поддерживаем запас востребованных деталей
                            для Infiniti и Nissan. Можем предложить оригинальные запчасти,
                            проверенные аналоги и, для некоторых видов ремонта, контрактные
                            детали — с учётом модели, условий эксплуатации и бюджета
                            владельца.
                        </p>
                    </div>
                </div>
                <div class="reason-row reveal">
                    <div class="reason-num">05</div>
                    <div class="reason-body">
                        <h3>Команда технических специалистов</h3>
                        <p>
                            С автомобилем работают мастера-приёмщики, диагносты, механики,
                            мотористы и автоэлектрики. Мастер-приёмщик уточняет симптомы,
                            фиксирует обращение и передаёт в ремонтный цех всю информацию,
                            необходимую для диагностики.
                        </p>
                    </div>
                </div>
                <div class="reason-row reveal">
                    <div class="reason-num">06</div>
                    <div class="reason-body">
                        <h3>Документально оформленная гарантия</h3>
                        <p>
                            После ремонта владелец получает заказ-наряд с перечнем
                            выполненных работ и установленных запчастей. Гарантийные условия
                            фиксируются в документах.
                        </p>
                    </div>
                </div>
            </div>
            <button
                class="btn reveal"
                onclick="
            document
              .getElementById('contacts')
              .scrollIntoView({ behavior: 'smooth' })
          ">
                Записаться
            </button>
        </div>
    </section>

    <!-- ================= PROCESS ================= -->
    <section class="process">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Порядок работы</div>
                <h2>Как проходит обслуживание</h2>
                <p>
                    Пять этапов — от первой заявки до выдачи автомобиля с готовыми
                    документами.
                </p>
            </div>
            <div class="process-track">
                <div class="process-step reveal">
                    <div class="process-node">01</div>
                    <h4>Запись</h4>
                    <p>
                        Уточняем модель автомобиля, симптомы и удобное время посещения.
                    </p>
                </div>
                <div class="process-step reveal">
                    <div class="process-node">02</div>
                    <h4>Приёмка</h4>
                    <p>
                        Мастер задаёт вопросы, фиксирует обращение и согласовывает
                        первоначальную диагностику.
                    </p>
                </div>
                <div class="process-step reveal">
                    <div class="process-node">03</div>
                    <h4>Диагностика</h4>
                    <p>Проверяем автомобиль и определяем причину неисправности.</p>
                </div>
                <div class="process-step reveal">
                    <div class="process-node">04</div>
                    <h4>Согласование</h4>
                    <p>
                        Показываем результаты, предлагаем варианты и предварительно
                        согласовываем стоимость.
                    </p>
                </div>
                <div class="process-step reveal">
                    <div class="process-node">05</div>
                    <h4>Ремонт и выдача</h4>
                    <p>
                        Выполняем утверждённые работы, проводим проверку и выдаём
                        документы.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SERVICES ================= -->
    <section class="services" id="services">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Наши услуги</div>
                <h2>Комплексное обслуживание Infiniti и Nissan</h2>
                <p>
                    Точную стоимость озвучиваем после диагностики — до начала работ
                    ничего не делаем без вашего согласования.
                </p>
            </div>
            <div class="service-grid">
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M13 3 4 14h7l-1 7 9-11h-7l1-7Z"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Диагностика автомобиля</h3>
                    <p>
                        Проверка выхлопной системы, топливной системы, охлаждающей
                        жидкости, подвески и кондиционера.
                    </p>
                    <div class="price-note">Стоимость — по итогам осмотра</div>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle
                                cx="12"
                                cy="12"
                                r="3"
                                stroke="currentColor"
                                stroke-width="1.6" />
                            <path
                                d="M12 3v2m0 14v2m9-9h-2M5 12H3m14.5-6.5-1.4 1.4M6.9 17.1l-1.4 1.4m0-13 1.4 1.4M17.1 17.1l1.4 1.4"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Техническое обслуживание</h3>
                    <p>
                        Замена масла двигателя и фильтра, свечей зажигания, топливного и
                        воздушного фильтров, охлаждающей жидкости.
                    </p>
                    <div class="price-note">Плановый регламент по модели</div>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M7 3v6M17 3v6M4 9h16l-1 8a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3L4 9Z"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Электрооборудование</h3>
                    <p>
                        Замена стеклоочистителей, моторов омывателя, звуковых сигналов,
                        фар и блока предохранителей.
                    </p>
                    <div class="price-note">Диагностика цепей включена</div>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle
                                cx="12"
                                cy="12"
                                r="8"
                                stroke="currentColor"
                                stroke-width="1.6" />
                            <circle
                                cx="12"
                                cy="12"
                                r="2.4"
                                stroke="currentColor"
                                stroke-width="1.6" />
                            <path
                                d="M12 4v2m0 12v2m8-8h-2M6 12H4"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Подвеска автомобиля</h3>
                    <p>
                        Ремонт компрессора пневмоподвески, замена сайлентблоков привода,
                        пружин и амортизаторов.
                    </p>
                    <div class="price-note">Проверка геометрии в комплекте</div>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M4 12h4l2-4 4 8 2-4h4"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Двигатель автомобиля</h3>
                    <p>
                        Замер компрессии, снятие и установка ГБЦ, замена натяжителя цепи,
                        настройка VVEL.
                    </p>
                    <div class="price-note">Профильное оборудование Consult III</div>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 3 4 7v6c0 5 3.5 7.5 8 8 4.5-.5 8-3 8-8V7l-8-4Z"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3>Тормозная система</h3>
                    <p>
                        Переборка суппорта, замена колодок (передних и задних), тормозного
                        шланга и пыльника суппорта.
                    </p>
                    <div class="price-note">Тест-драйв после ремонта</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CLARITY ================= -->
    <section class="clarity">
        <div class="wrap clarity-grid">
            <div class="visual-frame reveal" style="aspect-ratio: 4/5">
                <span class="tag">фото ремонта</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/inf-rem.jpg" alt="Фото машина на подъёмнике" />
                <!-- <svg
            class="car-glyph"
            viewBox="0 0 100 120"
            fill="none"
            style="width: 46%"
          >
            <rect
              x="14"
              y="8"
              width="72"
              height="104"
              rx="6"
              stroke="#3f8dff"
              stroke-width="2"
            />
            <path
              d="M28 32h44M28 46h44M28 60h30"
              stroke="#63a6ff"
              stroke-width="2"
              stroke-linecap="round"
            />
            <path
              d="M30 80l10 10 22-22"
              stroke="#63a6ff"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg> -->
            </div>
            <div class="reveal">
                <div class="eyebrow">Понятный результат</div>
                <h2
                    style="
              font-size: clamp(26px, 3vw, 36px);
              font-weight: 700;
              margin-bottom: 20px;
            ">
                    Ремонт не должен быть непонятным
                </h2>
                <p>
                    Многие владельцы приезжают в сервис с одной главной тревогой:
                    неизвестно, насколько серьёзна неисправность и во сколько обойдётся
                    ремонт.
                </p>
                <p>
                    Наша задача — заменить эту неизвестность понятным планом действий.
                    После диагностики вы будете знать:
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
                        </svg>в чём причина проблемы
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>что необходимо сделать в первую очередь
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>какие работы можно запланировать
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>какие запчасти подойдут
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M5 13l4 4L19 7"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>какова согласованная стоимость ремонта
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= OTHER BRANDS ================= -->
    <section class="other-brands">
        <div class="wrap other-grid">
            <div class="reveal">
                <div class="eyebrow">Другие марки</div>
                <h2
                    style="
              font-size: clamp(26px, 3vw, 36px);
              font-weight: 700;
              margin-bottom: 20px;
            ">
                    Мы работаем не только с Infiniti и Nissan
                </h2>
                <p>
                    Infiniti и Nissan — наша профильная специализация. При этом опыт
                    команды и оснащение сервиса позволяют обслуживать автомобили других
                    марок.
                </p>
                <p>
                    Если для выполнения работы требуется узкоспециализированное
                    оборудование или технология, мастер заранее сообщит, сможем ли мы
                    качественно решить задачу.
                </p>
            </div>
            <div class="visual-frame reveal" style="aspect-ratio: 16/10">
                <span class="tag">фото ряда автомобилей на площадке</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-infiniti.jpg" alt="Фото ряда автомобилей на площадке" />
                <!-- <svg
            class="car-glyph"
            viewBox="0 0 220 90"
            fill="none"
            style="width: 70%"
          >
            <path
              d="M6 62 L18 44 Q22 40 30 40 L58 40 Q64 40 68 44 L80 62"
              stroke="#3f8dff"
              stroke-width="1.8"
            />
            <path
              d="M74 62 L86 44 Q90 40 98 40 L126 40 Q132 40 136 44 L148 62"
              stroke="#63a6ff"
              stroke-width="1.8"
            />
            <path
              d="M142 62 L154 44 Q158 40 166 40 L194 40 Q200 40 204 44 L214 62"
              stroke="#3f8dff"
              stroke-width="1.8"
            />
            <line
              x1="4"
              y1="62"
              x2="216"
              y2="62"
              stroke="#232d47"
              stroke-width="1.6"
            />
          </svg> -->
            </div>
        </div>
    </section>

    <!-- ================= TRUST / CTA ================= -->
    <section class="trust">
        <div class="wrap">
            <div class="reveal">
                <div class="stars">★★★★★</div>
                <div class="eyebrow">Более 50 отзывов 5*</div>
                <h2>
                    Нам доверяют владельцы автомобилей — и об этом говорят наши отзывы
                </h2>
                <p class="lead">
                    Доверьте автомобиль специалистам, которые знают его особенности.
                    Проведём диагностику, объясним результаты и предложим понятный план
                    ремонта — без технического жаргона и работ, не согласованных с вами.
                </p>
                <button
                    class="btn"
                    onclick="
              document
                .getElementById('contacts')
                .scrollIntoView({ behavior: 'smooth' })
            ">
                    Записаться в сервис
                </button>
            </div>
        </div>
    </section>

    <!-- ================= CONTACT FORM ================= -->
    <section class="cta-form" id="contacts">
        <div class="wrap">
            <div class="form-grid reveal">
                <div class="form-panel">
                    <h3>Получите скидку 5% на наши услуги при записи через сайт</h3>
                    <p>
                        Оставьте имя и телефон — перезвоним, чтобы уточнить модель
                        автомобиля и подобрать удобное время.
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="975045c" title="Главная форма"]'); ?>
                </div>
                <div class="map-panel">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 21s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12Z"
                            stroke="currentColor"
                            stroke-width="1.6" />
                        <circle
                            cx="12"
                            cy="9"
                            r="2.6"
                            stroke="currentColor"
                            stroke-width="1.6" />
                    </svg>
                    <div class="addr">Москва, Загородное шоссе, д. 7А, стр. 3</div>
                    <div class="hrs">Ежедневно с 10:00 до 20:00</div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
// get_sidebar();
get_footer();
