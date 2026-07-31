<?php

/**
 * Template Name: Ремонт Infiniti
 * Description: Шаблон для страницы ремонта Infiniti
 */

get_header();
?>

<section class="hero">
    <div class="container container-hero">
        <div class="hero-title-block">
            <p class="hero-description">
                <span class="color-accent">СОБСТВЕННЫЙ БОЛЬШОЙ</span>СКЛАД АВТОЗАПЧАСТЕЙ
            </p>
            <h1 class="hero-title">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="hero-info-block">
            <div class="info-block-models">
                <img src="<?php echo get_template_directory_uri() . '/img/cbi_infiniti.png' ?>" alt="Иконка Infiniti">
                <a href="#" class="block-models-link">Infiniti</a>
            </div>
            <p class="info-block-desc">
                Ремонт и техническое обслуживание автомобилей Infiniti. <span class="color-accent">Профильные мастера, дилерское диагностическое оборудование и прозрачное согласование стоимости до начала работ.</span>
            </p>
            <a href="#about-form" class="info-block-button">Записаться</a>
        </div>
    </div>
</section>

<!-- <section class="refit-models">
    <div class="container container-refit">
        <div class="refit-models-item">
            <div class="refit-card all-auto">
                <h2 class="refit-card-title">Ремонт любых авто</h2>
                <hr>
                <p class="refit-card-desc">Ремонт и полное обслуживание всех марок автомобилей</p>
                <a href="#" class="refit-card-buttom">Подробнее</a>
            </div>
        </div>
        <div class="refit-models-item">
            <div class="refit-card infiniti-auto">
                <h2 class="refit-card-title">Ремонт Infiniti</h2>
                <hr>
                <p class="refit-card-desc">Ремонт и полное обслуживание <span class="color-accent">Infiniti</span> с особыми возможностями</p>
                <a href="#" class="refit-card-buttom">Подробнее</a>
            </div>
        </div>
        <div class="refit-models-item three">
            <div class="refit-card nissan-auto">
                <h2 class="refit-card-title">Ремонт Nissan</h2>
                <hr>
                <p class="refit-card-desc">Ремонт и полное обслуживание <span class="color-accent">Nissan</span> с особыми возможностями</p>
                <a href="#" class="refit-card-buttom">Подробнее</a>
            </div>
        </div>
    </div>
</section> -->

<section class="free-diagnost">
    <div class="container">
        <div class="free-diagnost-title">
            <span class="color-accent">Комплекстная диагностика 4 в 1</span><br> — бесплатно при выполнении работ в сервисе
            </span>
        </div>
        <div class="free-diagnost-description">
            <span class="color-accent">Узкая специализация на автомобилях Infiniti и Nissan и более чем 10-летний опыт мастеров позволяют точно определять причины неисправностей и предлагать обоснованный вариант ремонта.
                <!-- </span>*при выполнении любых работ в сервисе.</span> -->
        </div>
        <div class="free-diagnost-block">
            <div class="free-diagnost-block-item">
                <img class="free-diagnost-block-img" src="<?php echo get_template_directory_uri() . '/img/d.png' ?>" alt="Иконка">
                <p class="free-diagnost-block-title">Диагностика двигателя</p>
            </div>
            <div class="free-diagnost-block-item">
                <img class="free-diagnost-block-img" src="<?php echo get_template_directory_uri() . '/img/h.png' ?>" alt="Иконка">
                <p class="free-diagnost-block-title">Диагностика ходовой части</p>
            </div>
            <div class="free-diagnost-block-item">
                <img class="free-diagnost-block-img" src="<?php echo get_template_directory_uri() . '/img/ps.png' ?>" alt="Иконка">
                <p class="free-diagnost-block-title">Диагностика тормозной системы</p>
            </div>
            <div class="free-diagnost-block-item">
                <img class="free-diagnost-block-img" src="<?php echo get_template_directory_uri() . '/img/m.jpg' ?>" alt="Иконка">
                <p class="free-diagnost-block-title">Диагностика утечек технических жидкостей</p>
            </div>
        </div>
        <a href="#about-form" class="info-block-button free-diagnost-button popmake-205">Записаться на бесплатную диагностику</a>
        <!-- <a href="#about-form" class="info-block-button free-diagnost-button popmake-113">Записаться на бесплатную диагностику</a> -->
    </div>

</section>

<section class="models">
    <div class="container">
        <div class="models-title">
            <span class="color-accent">Модели</span>
        </div>
        <div class="models-grid">
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti EX35"><img src="<?php echo get_template_directory_uri() . '/img/models/EX35.webp' ?>" alt="" title="Infiniti EX35">
                </a>
                <p class="models-descrition">Infiniti EX35</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti EX37"><img src="<?php echo get_template_directory_uri() . '/img/models/EX37.webp' ?>" alt="" title="Infiniti EX37">
                </a>
                <p class="models-descrition">Infiniti EX37</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX25"><img src="<?php echo get_template_directory_uri() . '/img/models/FX25.webp' ?>" alt="" title="Infiniti FX25">
                </a>
                <p class="models-descrition">Infiniti FX25</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX30D"><img src="<?php echo get_template_directory_uri() . '/img/models/FX30D.webp' ?>" alt="" title="Infiniti FX30D">
                </a>
                <p class="models-descrition">Infiniti FX30D</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX35"><img src="<?php echo get_template_directory_uri() . '/img/models/FX35.webp' ?>" alt="" title="Infiniti FX35">
                </a>
                <p class="models-descrition">Infiniti FX35</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX37"><img src="<?php echo get_template_directory_uri() . '/img/models/FX37.webp' ?>" alt="" title="Infiniti FX37">
                </a>
                <p class="models-descrition">Infiniti FX37</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX45"><img src="<?php echo get_template_directory_uri() . '/img/models/FX45.webp' ?>" alt="" title="Infiniti FX45">
                </a>
                <p class="models-descrition">Infiniti FX45</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti FX50"><img src="<?php echo get_template_directory_uri() . '/img/models/FX50.webp' ?>" alt="" title="Infiniti FX50">
                </a>
                <p class="models-descrition">Infiniti FX50</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti G25"><img src="<?php echo get_template_directory_uri() . '/img/models/G25.webp' ?>" alt="" title="Infiniti G25">
                </a>
                <p class="models-descrition">Infiniti G25</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti G35"><img src="<?php echo get_template_directory_uri() . '/img/models/G35.webp' ?>" alt="" title="Infiniti G35">
                </a>
                <p class="models-descrition">Infiniti G35</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti G37"><img src="<?php echo get_template_directory_uri() . '/img/models/G37.webp' ?>" alt="" title="Infiniti G37">
                </a>
                <p class="models-descrition">Infiniti G37</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti JX35"><img src="<?php echo get_template_directory_uri() . '/img/models/JX35.webp' ?>" alt="" title="Infiniti JX35">
                </a>
                <p class="models-descrition">Infiniti JX35</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti M25"><img src="<?php echo get_template_directory_uri() . '/img/models/M25.webp' ?>" alt="" title="Infiniti M25">
                </a>
                <p class="models-descrition">Infiniti M25</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti M35"><img src="<?php echo get_template_directory_uri() . '/img/models/M35.webp' ?>" alt="" title="Infiniti M35">
                </a>
                <p class="models-descrition">Infiniti M35</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti M37"><img src="<?php echo get_template_directory_uri() . '/img/models/M37.webp' ?>" alt="" title="Infiniti M37">
                </a>
                <p class="models-descrition">Infiniti M37</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti M45"><img src="<?php echo get_template_directory_uri() . '/img/models/M45.webp' ?>" alt="" title="Infiniti M45">
                </a>
                <p class="models-descrition">Infiniti M45</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti M56"><img src="<?php echo get_template_directory_uri() . '/img/models/M56.webp' ?>" alt="" title="Infiniti M56">
                </a>
                <p class="models-descrition">Infiniti M56</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti Q50"><img src="<?php echo get_template_directory_uri() . '/img/models/Q50.webp' ?>" alt="" title="Infiniti Q50">
                </a>
                <p class="models-descrition">Infiniti Q50</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti Q60"><img src="<?php echo get_template_directory_uri() . '/img/models/Q60.webp' ?>" alt="" title="Infiniti Q60">
                </a>
                <p class="models-descrition">Infiniti Q60</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti Q70"><img src="<?php echo get_template_directory_uri() . '/img/models/Q70.webp' ?>" alt="" title="Infiniti Q70">
                </a>
                <p class="models-descrition">Infiniti Q70</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX50"><img src="<?php echo get_template_directory_uri() . '/img/models/QX50.webp' ?>" alt="" title="Infiniti QX50">
                </a>
                <p class="models-descrition">Infiniti QX50</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX55"><img src="<?php echo get_template_directory_uri() . '/img/models/QX55.webp' ?>" alt="" title="Infiniti QX55">
                </a>
                <p class="models-descrition">Infiniti QX55</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX56"><img src="<?php echo get_template_directory_uri() . '/img/models/QX56.webp' ?>" alt="" title="Infiniti QX56">
                </a>
                <p class="models-descrition">Infiniti QX56</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX60"><img src="<?php echo get_template_directory_uri() . '/img/models/QX60.webp' ?>" alt="" title="Infiniti QX60">
                </a>
                <p class="models-descrition">Infiniti QX60</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX70"><img src="<?php echo get_template_directory_uri() . '/img/models/QX70.webp' ?>" alt="" title="Infiniti QX70">
                </a>
                <p class="models-descrition">Infiniti QX70</p>
            </div>
            <div class="models-item">
                <a href="#about-form" data-model-name="Infiniti QX80"><img src="<?php echo get_template_directory_uri() . '/img/models/QX80.webp' ?>" alt="" title="Infiniti QX80">
                </a>
                <p class="models-descrition">Infiniti QX80</p>
            </div>
        </div>
        <a href="#" class="button-open-infiniti">Больше моделей</a>
        <a href="#" class="button-close-infiniti" style="display:none;">Свернуть модели</a>
    </div>
</section>

<section class="market">
    <div class="container">
        <div class="title-market">
            <img src="<?php echo get_template_directory_uri() . '/img/title-market.png' ?>" alt="Заголовок Инфинити Маркет">
        </div>
        <div class="questions-market">
            <div class="questions-title">
                <div class="questions-title-block sticky-element">
                    <p>
                        <span class="color-accent">6 причин обратиться в наш сервис</span> Infiniti <span class="arrow"><svg width="17" height="34" viewBox="0 0 17 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3891 18.0072L6.37499 26.0213L4.37183 24.0182L11.3843 17.0057L4.37183 9.99316L6.37499 7.98999L14.3891 16.0041C14.6547 16.2697 14.8039 16.63 14.8039 17.0057C14.8039 17.3813 14.6547 17.7416 14.3891 18.0072Z" fill="white" fill-opacity="0.5" />
                            </svg>
                        </span>
                    </p>
                    <img src="<?php echo get_template_directory_uri() . '/img/inf2.jpg' ?>" alt="Мерседес" class="questions-img">
                </div>
            </div>
            <div class="questions-block">

                <?php
                // Получаем данные из TOP группы
                $top_items = get_post_meta(get_the_ID(), 'infiniti_faq_top_group', true);

                if (! empty($top_items) && is_array($top_items)) :
                    $counter = 1;
                    foreach ($top_items as $item) :
                        $question = isset($item['question']) ? $item['question'] : '';
                        $answer   = isset($item['answer']) ? $item['answer'] : '';

                        if (! empty($question) && ! empty($answer)) :
                ?>
                            <div class="questions-block-item">
                                <div class="num color-accent"><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></div>
                                <div class="questions-block-text">
                                    <p class="questions-block-title color-accent"><?php echo esc_html($question); ?></p>
                                    <p class="questions-block-deck"><?php echo wp_kses_post($answer); ?></p>
                                </div>
                            </div>
                    <?php
                            $counter++;
                        endif;
                    endforeach;
                else :
                    // Запасной контент для TOP группы
                    ?>
                    <div class="questions-block-item">
                        <div class="num color-accent">01</div>
                        <div class="questions-block-text">
                            <p class="questions-block-title color-accent">Один автосервис для всех ваших машин</p>
                            <p class="questions-block-deck">Вам не нужно держать в телефоне 5 разных СТО — мы закрываем все типы работ по большинству марок.</p>
                        </div>
                    </div>
                    <!-- ... остальные запасные элементы ... -->
                <?php endif; ?>
            </div>
            <!-- <div class="questions-block">
                <div class="questions-block-item">
                    <div class="num color-accent">01</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Один автосервис для всех ваших машин</p>
                        <p class="questions-block-deck">Вам не нужно держать в телефоне 5 разных СТО — мы закрываем все типы работ по большинству марок.</p>
                    </div>
                </div>
                <div class="questions-block-item">
                    <div class="num color-accent">02</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Собственный большой скалад запчастей</p>
                        <p class="questions-block-deck">В 92% случаев не придется искать/ждать запчасти. На нашем складе есть всё для большинства марок и моделей автомобилей.</p>
                    </div>
                </div>
                <div class="questions-block-item">
                    <div class="num color-accent">03</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Внушительный опыт мастеров</p>
                        <p class="questions-block-deck">Наши мастера находят решения даже в самых не понятных ситуациях, за счет внушительного опыта каждого от 5 до 15 лет</p>
                    </div>
                </div>
                <div class="questions-block-item">
                    <div class="num color-accent">04</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Оптимальное сочетание цены и качества</p>
                        <p class="questions-block-deck">Приезжайте и убедитесь сами. Это касается как стоимости услуг в автосервисе, так и автозапчастей с нашего склада. </p>
                    </div>
                </div>
                <div class="questions-block-item">
                    <div class="num color-accent">05</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Прозрачная коммуникация</p>
                        <p class="questions-block-deck">Нормальный человеческий разговор вместо «такая политика сервиса».</p>
                    </div>
                </div>
                <div class="questions-block-item">
                    <div class="num color-accent">06</div>
                    <div class="questions-block-text">
                        <p class="questions-block-title color-accent">Гарантия и документы</p>
                        <p class="questions-block-deck">Все работы фиксируются в заказ-наряде, есть гарантия на работы и установленные запчасти.</p>
                    </div>
                </div>
                <a href="#" class="market-button">Записаться</a>
            </div> -->
        </div>
    </div>
</section>
<section class="servises">
    <div class="container">
        <p class="servises-title"><span class="color-accent">Наши</span> услуги <span class="servises-arrow">
                <svg width="34" height="17" viewBox="0 0 34 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_86_1257)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9928 14.3891L7.97868 6.37499L9.98184 4.37183L16.9943 11.3843L24.0068 4.37183L26.01 6.37499L17.9959 14.3891C17.7303 14.6547 17.37 14.8039 16.9943 14.8039C16.6187 14.8039 16.2584 14.6547 15.9928 14.3891Z" fill="white" fill-opacity="0.5" />
                    </g>
                    <defs>
                        <clipPath id="clip0_86_1257">
                            <rect width="17" height="34" fill="white" transform="translate(34 1.48619e-06) rotate(90)" />
                        </clipPath>
                    </defs>
                </svg>

            </span></p>
        <div class="servises-cards">
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/diagnost.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Диагностика автомобиля</h3>
                <ul class="servises-card-list">
                    <li>Диагностика выхлопной системы: от 1200 руб.</li>
                    <li>Диагностика топливной системы: от 3000 руб.</li>
                    <li>Диагностика утечки охлаждающей жидкости: от 1500 руб.</li>
                    <li>Диагностика подвестки: от 1500 руб.</li>
                    <li>Диагностика кондиционера: от 3750 руб.</li>
                    <li>Диагностика электрооборудования: от 2400 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/to-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Техническое обслуживание</h3>
                <ul class="servises-card-list">
                    <li>Замена масла двигателя и масленного фильтра без защиты картера: от 1500 руб.</li>
                    <li>Замена свечей зажигания: от 5400 руб.</li>
                    <li>Замена топливного фильтра: от 2400 руб.</li>
                    <li>Замена воздушного фильтра: от 600 руб.</li>
                    <li>Замена охлаждающей жидкости: от 3500 руб.</li>
                    <li>Замена тормозной жидкости: от 2550 руб.</li>
                    <li>Регулировка стояночного тормоза: от 1200 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/el-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Электро -оборудование</h3>
                <ul class="servises-card-list">
                    <li>Замена трапеции стеклоочистителя: от 6000 руб.</li>
                    <li>Замена мотора омывателя: от 3000 руб.</li>
                    <li>Замена звукового сигнала: от 1200 руб.</li>
                    <li>Замена передней фары: от 6000 руб.</li>
                    <li>Замена блока предохранителей: от 4500 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/podves-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Подвеска автомобиля</h3>
                <ul class="servises-card-list">
                    <li>Ремонт компрессора пневмоподвески QX80, QX56</li>
                    <li>Замена сальника привода: от 4500 руб.</li>
                    <li>Замена привода в сборе: от 4500 руб.</li>
                    <li>Замена задних пружин: от 7000 руб.</li>
                    <li>Замена передних пружин: от 4800 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/engin-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Двигатель автомобиля</h3>
                <ul class="servises-card-list">
                    <li>Настройка VVEL: от 8000 руб.</li>
                    <li>Замер компрессии двигателя: от 1000 руб.</li>
                    <li>Снятие/установка масляного поддона: от 6300 руб.</li>
                    <li>Снятие/установка двигателя: от 90000 руб.</li>
                    <li>Замена натяжителя цепи: от 57000 руб</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/tormoz-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Тормозная система</h3>
                <ul class="servises-card-list">
                    <li>Переборка суппорта: от 3600 руб.</li>
                    <li>Замена колодок (задних) барабанных</li>
                    <li>Замена тормозного шланга: от 4800 руб.</li>
                    <li>Замена суппорта тормозного в сборе от 6600 руб.</li>
                    <li>Замена пыльника суппорта</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/rep-engin-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Диагностика и ремонт двигателя</h3>
                <ul class="servises-card-list">
                    <li>Промывка датчика массового расхода воздуха: от 3000 руб.</li>
                    <li>Промывка узла дроссельной заслонки: от 4800 руб.</li>
                    <li>Замена интеркулера: от 4800 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/vyhlop-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Выхлопная система</h3>
                <ul class="servises-card-list">
                    <li>Установка тюниг-глушителя</li>
                    <li>Замена приемной трубы: от 10800 руб.</li>
                    <li>Замена катализатора: от 9000 руб.</li>
                    <li>Удаление катализатора</li>
                    <li>Замена глушителя6 от 6600 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/rul-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Рулевое управление</h3>
                <ul class="servises-card-list">
                    <li>Прокачка кардана</li>
                    <li>Замена рулевого кардана: от 5400 руб.</li>
                    <li>Замена насоса гидроусилителя руля: от 10200 руб.</li>
                    <li>Замена рулевой рейки: от 15000 руб.</li>
                    <li>Ремонт гидравлических рулевых реек: от 11000 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/zam-zidkost-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Замена жидкостей</h3>
                <ul class="servises-card-list">
                    <li>Замена охлаждающей жидкости: от 2550 руб.</li>
                    <li>Замена тормозной жидкости: от 2550 руб.</li>
                    <li>Замена масла АКПП без фильтра (частичная): от 3600 руб.</li>
                    <li>Замена масла АКПП с фильтром (частичная): от 4800 руб.</li>
                    <li>Замена масла со снятием защиты</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/cond-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Кондиционер и отопление</h3>
                <ul class="servises-card-list">
                    <li>Замена вискомуфты: от 4800 руб.</li>
                    <li>Замена вентилятора радиатора</li>
                    <li>Замена вентилятора охлаждения: от 6000 руб.</li>
                    <li>Замена радиатора охлаждения6 от 12000 руб.</li>
                    <li>Замена патрубка: от 1200 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/sist-ohlazden-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Система охлаждения</h3>
                <ul class="servises-card-list">
                    <li>Замена радиатора ДВС: от 12000 руб.</li>
                    <li>Мойка радиаторов со снятием: от 24000 руб.</li>
                    <li>Полное обслуживание системы охлаждения</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/toplivo-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Топливная система</h3>
                <ul class="servises-card-list">
                    <li>Снятие/установка топливного бака: от 14100 руб.</li>
                    <li>Замена топливного насоса (в баке): от 6600 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/transmiss-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Трансмиссия автомобиля</h3>
                <ul class="servises-card-list">
                    <li>Прокачка контура сцепления</li>
                    <li>Замена МКПП</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/drugoe-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Другое</h3>
                <ul class="servises-card-list">
                    <li>Прописка датчиков давления шин</li>
                    <li>Установка жгута</li>
                    <li>Программирование (прописка) ключа INFINITI NISSAN: от 4800 руб.</li>
                    <li>Обслуживание сливных каналов люка: от 5400 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
            <div class="servises-card-item">
                <img src="<?php echo get_template_directory_uri() . '/img/vvel-icon.png' ?>" alt="Изображение на карточке" class="servises-card-img">
                <h3 class="servises-card-title">Настройка VVEL (Вивэл) авто</h3>
                <ul class="servises-card-list">
                    <li>Диагностика и настройка VVEL (Infiniti/Nissan): от 8000 руб.</li>
                </ul>
                <div class="servises-card-button-block">
                    <a href="#" class="card-button-item">Еще</a>
                    <a href="#about-form" class="card-button-offer">Записаться</a>
                </div>
            </div>
        </div>
        <a href="#" class="button-open">Раскрыть все категории услуг</a>
        <a href="#" class="button-close" style="display:none;">Свернуть категории услуг</a>
    </div>
</section>
<section class="servises-photo">
    <div class="container">

        <img src="<?php echo get_template_directory_uri() . '/img/photo-logo.png' ?>" alt="Логотип Автосервиса ИнфинитиМаркет" class="servises-photo-logo">

        <div class="services-slider"> <!-- Изменил имя класса для соответствия инициализации -->
            <!-- <div class="slide-item">
                <img src="<?php // echo get_template_directory_uri() . '/img/photo-logo-img.png' 
                            ?>" alt="Фотография Автосервиса ИнфинитиМаркет 1" class="services-photo-img">
            </div> -->
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/inf2-1.jpg' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 2" class="services-photo-img">
            </div>
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/inf2-2.jpg' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 3" class="services-photo-img">
            </div>
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/inf2-3.jpg' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 4" class="services-photo-img">
            </div>
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/inf2-4.jpg' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 5" class="services-photo-img">
            </div>
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/inf2-1.jpg' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 6" class="services-photo-img">
            </div>
            <div class="slide-item">
                <img src="<?php echo get_template_directory_uri() . '/img/s-62.webp' ?>" alt="Фотография Автосервиса ИнфинитиМаркет 7" class="services-photo-img">
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <h2 class="about-title"><span class="color-accent">Стандарты </span> сервиса
            <span class="servises-arrow">
                <svg width="34" height="17" viewBox="0 0 34 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_86_1257)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9928 14.3891L7.97868 6.37499L9.98184 4.37183L16.9943 11.3843L24.0068 4.37183L26.01 6.37499L17.9959 14.3891C17.7303 14.6547 17.37 14.8039 16.9943 14.8039C16.6187 14.8039 16.2584 14.6547 15.9928 14.3891Z" fill="white" fill-opacity="0.5"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_86_1257">
                            <rect width="17" height="34" fill="white" transform="translate(34 1.48619e-06) rotate(90)"></rect>
                        </clipPath>
                    </defs>
                </svg>

            </span>
        </h2>
        <div class="about-block">
            <div class="about-description">
                <div class="about-description-text">
                    <p>Проведём комплексную диагностику<span class="color-accent"> Infiniti</span><br>оценим состояние основных систем и подготовим рекомендации.</p>
                    <p>Вы узнаете, какие работы необходимы сейчас, а какие можно запланировать на будущее.</p>
                </div>
                <div id="about-form" class="about-description-form">
                    <p class="form-title"><span class="color-accent">Получите скидку 5%</span>на наши услуги при записи через сайт</p>
                    <?php echo do_shortcode('[contact-form-7 id="d0603f7" title="Форма для моделей"]') ?>
                </div>
            </div>
            <div class="about-difference">
                <div class="about-difference-block">
                    <div class="difference-block-item">
                        <img src="<?php echo get_template_directory_uri() . '/img/about-icon1.png' ?>" alt="Иконка">
                        <p class="difference-block-title">Высокий уровень</p>
                        <p class="difference-block-deck">Сервис уровня диллера по разумной цене</p>
                    </div>
                    <div class="difference-block-item">
                        <img src="<?php echo get_template_directory_uri() . '/img/about-icon2.png' ?>" alt="Иконка">
                        <p class="difference-block-title">Запчасти на складе</p>
                        <p class="difference-block-deck">Востребованные детали для Infiniti доступны без длительного ожидания</p>
                    </div>
                    <div class="difference-block-item">
                        <img src="<?php echo get_template_directory_uri() . '/img/about-icon3.png' ?>" alt="Иконка">
                        <p class="difference-block-title">Честность</p>
                        <p class="difference-block-deck">Озвучиваем цены до начала ремонта</p>
                    </div>
                    <div class="difference-block-item">
                        <img src="<?php echo get_template_directory_uri() . '/img/about-icon4.png' ?>" alt="Иконка">
                        <p class="difference-block-title">Гарантия</p>
                        <p class="difference-block-deck">Фиксируем работы и гарантийные условия в заказ-наряде</p>
                    </div>
                </div>
                <div class="call-header call-form">
                    <a class="call-header-link" href="https://t.me/InfinitiMRKT"><img src="<?php echo get_template_directory_uri() . '/img/tg.png' ?>" alt="Иконка мессендера Telegram"></a>
                    <a class="call-header-link" href="https://max.ru/u/f9LHodD0cOL4nEp-jeXEMKgWVl6s_sKnhIhJ7vBSUHpoWPmTLEFw_nMfTJA"><img src="<?php echo get_template_directory_uri() . '/img/max2.png' ?>" alt="Иконка мессендера NAX"></a>
                </div>
                <div class="yandex-map" style="width:560px;height:470px;overflow:hidden;position:relative;border-radius: 30px;margin-top: 55px;"><iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/11681120492?comments"></iframe><a href="https://yandex.ru/maps/org/infiniti_market_servis/11681120492/" target="_blank" style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Инфинити Маркет Сервис — Яндекс Карты</a></div>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <div class="questions-market">
            <div class="questions-title">
                <div class="questions-title-block sticky-element">
                    <p>
                        <span class="color-accent">FAQ</span>(Часто задаваемые вопросы)
                        <span class="arrow">
                            <svg width="17" height="34" viewBox="0 0 17 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3891 18.0072L6.37499 26.0213L4.37183 24.0182L11.3843 17.0057L4.37183 9.99316L6.37499 7.98999L14.3891 16.0041C14.6547 16.2697 14.8039 16.63 14.8039 17.0057C14.8039 17.3813 14.6547 17.7416 14.3891 18.0072Z" fill="white" fill-opacity="0.5" />
                            </svg>
                        </span>
                    </p>
                    <img src="<?php echo get_template_directory_uri() . '/img/inf3.jpg' ?>" alt="Мерседес" class="questions-img">
                </div>
            </div>
            <div class="questions-block">
                <?php
                // Получаем данные из группы FAQ
                $faq_items = get_post_meta(get_the_ID(), 'infiniti_faq_group', true);

                if (! empty($faq_items) && is_array($faq_items)) :
                    $counter = 1;
                    foreach ($faq_items as $item) :
                        $question = isset($item['question']) ? $item['question'] : '';
                        $answer   = isset($item['answer']) ? $item['answer'] : '';

                        if (! empty($question) && ! empty($answer)) :
                ?>
                            <div class="questions-block-item">
                                <div class="num color-accent"><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></div>
                                <div class="questions-block-text">
                                    <p class="questions-block-title color-accent"><?php echo esc_html($question); ?></p>
                                    <div class="questions-block-deck"><?php echo wp_kses_post($answer); ?></div>
                                </div>
                            </div>
                    <?php
                            $counter++;
                        endif;
                    endforeach;
                else :
                    // Запасной контент, если данные не заполнены
                    ?>
                    <!-- Здесь ваши стандартные 6 вопросов-ответов -->
                    <div class="questions-block-item">
                        <div class="num color-accent">01</div>
                        <div class="questions-block-text">
                            <p class="questions-block-title color-accent">Один автосервис для всех ваших машин</p>
                            <p class="questions-block-deck">Вам не нужно держать в телефоне 5 разных СТО — мы закрываем все типы работ по большинству марок.</p>
                        </div>
                    </div>
                    <!-- ... остальные 5 элементов ... -->
                <?php endif; ?>

                <a href="#about-form" class="market-button">Записаться</a>
            </div>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div class="contacts-title">
            <p class="contacts-element"><span class="color-accent">Контакты</span>
                <span class="servises-arrow">
                    <svg width="34" height="17" viewBox="0 0 34 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_86_1257)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9928 14.3891L7.97868 6.37499L9.98184 4.37183L16.9943 11.3843L24.0068 4.37183L26.01 6.37499L17.9959 14.3891C17.7303 14.6547 17.37 14.8039 16.9943 14.8039C16.6187 14.8039 16.2584 14.6547 15.9928 14.3891Z" fill="white" fill-opacity="0.5"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_86_1257">
                                <rect width="17" height="34" fill="white" transform="translate(34 1.48619e-06) rotate(90)"></rect>
                            </clipPath>
                        </defs>
                    </svg>

                </span>
            </p>
        </div>
        <div class="contacts-grid">
            <div class="contacts-grid-item">
                <!-- <img src="<?php echo get_template_directory_uri() . '/img/symbols_call.png' ?>" alt="Иконка" class="contact-phone-img"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <title>Baseline Phone SVG Icon</title>
                    <path fill="#5fc2ff" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                </svg>
                <p class="contact-title">Телефон</p>
                <p class="contact-content">84991122731</p>
            </div>
            <div class="contacts-grid-item">
                <!-- <img src="<?php echo get_template_directory_uri() . '/img/whatsapp-fill.png' ?>" alt="Иконка" class="contact-wt-img"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <title>Bxl Whatsapp SVG Icon</title>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977c0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162l-2.824.741l.753-2.753l-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188a7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73c-.205-.075-.354-.112-.504.112s-.58.729-.711.879s-.262.168-.486.056s-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393c.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666c-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008a.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387c.536.231.954.369 1.279.473c.537.171 1.026.146 1.413.089c.431-.064 1.327-.542 1.514-1.066c.187-.524.187-.973.131-1.067c-.056-.094-.207-.151-.43-.263" fill="#5fc2ff" />
                </svg>
                <p class="contact-title">WHATSAPP</p>
                <p class="contact-content">89773337677</p>
            </div>
            <div class="contacts-grid-item">
                <a href="https://t.me/InfinitiMRKT">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <title>Baseline Telegram SVG Icon</title>
                        <path fill="#5fc2ff" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19c-.14.75-.42 1-.68 1.03c-.58.05-1.02-.38-1.58-.75c-.88-.58-1.38-.94-2.23-1.5c-.99-.65-.35-1.01.22-1.59c.15-.15 2.71-2.48 2.76-2.69a.2.2 0 0 0-.05-.18c-.06-.05-.14-.03-.21-.02c-.09.02-1.49.95-4.22 2.79c-.4.27-.76.41-1.08.4c-.36-.01-1.04-.2-1.55-.37c-.63-.2-1.12-.31-1.08-.66c.02-.18.27-.36.74-.55c2.92-1.27 4.86-2.11 5.83-2.51c2.78-1.16 3.35-1.36 3.73-1.36c.08 0 .27.02.39.12c.1.08.13.19.14.27c-.01.06.01.24 0 .38" />
                    </svg>
                    <p class="contact-title">TELEGRAM</p>
                </a>
            </div>
            <div class="contacts-grid-item">
                <a href="https://max.ru/u/f9LHodD0cOL4nEp-jeXEMKgWVl6s_sKnhIhJ7vBSUHpoWPmTLEFw_nMfTJA">
                    <img src="<?php echo get_template_directory_uri() . '/img/max3.png' ?>" class="contact-max-img" alt="Иконка мессендера NAX">
                    <p class="contact-title">MAX</p>
                </a>
            </div>
            <div class="contacts-grid-item">
                <!-- <img src="<?php echo get_template_directory_uri() . '/img/mdi_location.png' ?>" alt="Иконка" class="contact-address-img"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 48 48">
                    <title>Geo Location SVG Icon</title>
                    <path fill="#5fc2ff" fill-rule="evenodd" d="M23.424 41.817L24 41zm1.152 0l.004-.002l.01-.007l.03-.023l.118-.085q.152-.111.43-.324c.368-.282.89-.697 1.513-1.23a43.4 43.4 0 0 0 4.575-4.54C34.564 31.78 38 26.32 38 20.076c0-3.73-1.474-7.31-4.098-9.95A13.96 13.96 0 0 0 24 6a13.96 13.96 0 0 0-9.902 4.125A14.12 14.12 0 0 0 10 20.077c0 6.243 3.436 11.703 6.744 15.529a43.4 43.4 0 0 0 4.575 4.54c.624.533 1.145.948 1.513 1.23a26 26 0 0 0 .547.41l.032.022l.009.007l.004.002c.345.243.807.243 1.152 0M24 41l.576.817zm5-21a5 5 0 1 1-10 0a5 5 0 0 1 10 0" clip-rule="evenodd" />
                </svg>
                <p class="contact-title">Адрес</p>
                <p class="contact-content">Загородное ш., 7А, стр. 3, Москва</p>
            </div>
            <div class="contacts-grid-item">
                <!-- <img src="<?php echo get_template_directory_uri() . '/img/solar_calendar-bold.png' ?>" alt="Иконка" class="contact-works-img"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <title>Baseline Calendar Month SVG Icon</title>
                    <path fill="#5fc2ff" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 16H5V10h14zM9 14H7v-2h2zm4 0h-2v-2h2zm4 0h-2v-2h2zm-8 4H7v-2h2zm4 0h-2v-2h2zm4 0h-2v-2h2z" />
                </svg>
                <p class="contact-title">Режим работы</p>
                <p class="contact-content">
                    <?php
                    if (function_exists('theme_settings_get_work_hours')) {
                        echo theme_settings_get_work_hours();
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="contacts-map">
            <a href="https://yandex.ru/maps/213/moscow/house/zagorodnoye_shosse_7as3/Z04YcAZkTkIHQFtvfXp4dHxhYw==/?ll=37.614770%2C55.695028&z=17" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/img/map-contact.webp' ?>" alt="Карта автосервиса Infiniti">
            </a>
        </div>
        <div class="contacts-button">
            <a href="#" class="contacts-button-start"><img src="<?php echo get_template_directory_uri() . '/img/gis_route.png' ?>" alt="Иконка маршрута">Начать поездку</a>
            <a href="#about-form" class="contacts-button-action">Записаться</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Находим все ссылки внутри .models-grid, которые ведут к форме
        const modelLinks = document.querySelectorAll('.models-grid a[href="#about-form"]');

        // Находим само поле формы по его уникальному классу 'text-models'
        const modelField = document.querySelector('textarea.text-models'); // Используем класс, указанный в CF7

        if (!modelLinks.length || !modelField) {
            console.warn('Ссылки на модели или поле модели формы не найдены.');
            // Можно добавить return, если критично
            // return;
        }


        // Добавляем обработчик клика к каждой ссылке
        modelLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                // Получаем название модели из data-атрибута
                const modelName = this.getAttribute('data-model-name');

                // Проверяем, удалось ли получить название
                if (modelName) {
                    // Записываем полученное название в поле textarea
                    modelField.value = 'Сообщение: Модель ' + modelName;
                    // console.log('Значение модели установлено:', modelName); // Для отладки
                } else {
                    console.warn('Атрибут data-model-name не найден в ссылке:', this);
                }
            });
        });
    });
</script>
<?php
// get_sidebar();

get_footer();
