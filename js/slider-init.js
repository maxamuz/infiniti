jQuery(document).ready(function ($) {
  $(".services-slider").slick({
    // Пример настроек
    dots: false, // Показывать точки (навигация по слайдам)
    infinite: true, // Бесконечный цикл
    speed: 500, // Скорость анимации переключения
    slidesToShow: 1, // Сколько слайдов показывать одновременно
    adaptiveHeight: true, // Высота слайдера подстраивается под высоту текущего слайда
    autoplay: true, // Автопрокрутка
    autoplaySpeed: 2000, // Скорость автопрокрутки в миллисекундах
    pauseOnHover: true, // Пауза при наведении мыши
    arrows: true, // Показывать стрелки (необходим slick-theme.css для стилей)
    responsive: [
      {
        breakpoint: 768, // Для планшетов
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480, // Для мобильных
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
