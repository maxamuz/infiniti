document.addEventListener("DOMContentLoaded", function () {
  // Получаем элементы
  const cardsContainer = document.querySelector(".servises-cards");
  const cards = document.querySelectorAll(".servises-card-item");
  const buttonOpen = document.querySelector(".button-open");
  const buttonClose = document.querySelector(".button-close");

  // Количество карточек для показа по умолчанию
  const defaultVisibleCards = 6;

  // Функция для скрытия лишних карточек
  function hideExtraCards() {
    cards.forEach((card, index) => {
      if (index >= defaultVisibleCards) {
        card.style.display = "none";
      } else {
        card.style.display = "block";
      }
    });

    // Показываем кнопку "Раскрыть" и скрываем "Свернуть"
    buttonOpen.style.display = "block";
    buttonClose.style.display = "none";
  }

  // Функция для показа всех карточек
  function showAllCards() {
    cards.forEach((card) => {
      card.style.display = "block";
    });

    // Показываем кнопку "Свернуть" и скрываем "Раскрыть"
    buttonOpen.style.display = "none";
    buttonClose.style.display = "block";
  }

  // Инициализация: скрываем лишние карточки при загрузке
  hideExtraCards();

  // Обработчик клика на кнопку "Раскрыть все категории услуг"
  buttonOpen.addEventListener("click", function (e) {
    e.preventDefault();

    // Сохраняем позицию прокрутки до открытия
    const scrollPosition = window.pageYOffset;

    // Показываем все карточки
    showAllCards();

    // Возвращаемся на ту же позицию прокрутки
    window.scrollTo({
      top: scrollPosition,
      behavior: "instant", // или 'auto' - без анимации
    });

    // Опционально: плавная прокрутка к первой новой карточке
    setTimeout(() => {
      if (cards[defaultVisibleCards]) {
        cards[defaultVisibleCards].scrollIntoView({
          behavior: "smooth",
          block: "start",
          inline: "nearest",
        });
      }
    }, 50); // Небольшая задержка для отрисовки новых элементов
  });

  // Обработчик клика на кнопку "Свернуть категории услуг"
  buttonClose.addEventListener("click", function (e) {
    e.preventDefault();

    // Сохраняем позицию прокрутки до закрытия
    const scrollPosition = window.pageYOffset;

    // Скрываем лишние карточки
    hideExtraCards();

    // Возвращаемся на ту же позицию прокрутки
    window.scrollTo({
      top: scrollPosition,
      behavior: "instant",
    });

    // Опционально: плавная прокрутка к кнопке "Раскрыть"
    setTimeout(() => {
      buttonOpen.scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "nearest",
      });
    }, 50);
  });
});


/**
 * Mobile menu functionality
 */
document.addEventListener("DOMContentLoaded", function () {
  // Получаем элементы мобильного меню
  const mobileMenuToggle = document.querySelector(
    ".container-header-mobile .menu-toggle",
  );
  const mobileMenu = document.querySelector(
    ".container-header-mobile #primary-menu",
  );
  const mobileNav = document.querySelector(
    ".container-header-mobile .main-navigation",
  );
  const mobileHeader = document.querySelector(".container-header-mobile");

  if (mobileMenuToggle && mobileMenu) {
    // Функция открытия меню
    function openMenu() {
      mobileMenuToggle.setAttribute("aria-expanded", "true");
      mobileMenu.classList.add("toggled");
      document.body.classList.add("menu-open");

      // Добавляем overlay для закрытия по клику
      const overlay = document.createElement("div");
      overlay.className = "menu-overlay";
      overlay.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 998;
                cursor: pointer;
            `;
      document.body.appendChild(overlay);

      // Закрытие по клику на overlay
      overlay.addEventListener("click", closeMenu);
    }

    // Функция закрытия меню
    function closeMenu() {
      mobileMenuToggle.setAttribute("aria-expanded", "false");
      mobileMenu.classList.remove("toggled");
      document.body.classList.remove("menu-open");

      // Удаляем overlay
      const overlay = document.querySelector(".menu-overlay");
      if (overlay) {
        overlay.remove();
      }
    }

    // Обработчик клика на гамбургер
    mobileMenuToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      const isExpanded = this.getAttribute("aria-expanded") === "true";

      if (isExpanded) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Закрытие меню при клике на ссылку
    mobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", function (e) {
        // Не закрываем если это якорь на той же странице
        if (this.getAttribute("href").startsWith("#")) {
          e.preventDefault();
          const targetId = this.getAttribute("href");
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            closeMenu();
            setTimeout(() => {
              targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start",
              });
            }, 300);
          }
        } else {
          closeMenu();
        }
      });
    });

    // Закрытие по Escape
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && mobileMenu.classList.contains("toggled")) {
        closeMenu();
      }
    });

    // Закрытие при клике вне меню
    document.addEventListener("click", function (e) {
      if (
        mobileMenu.classList.contains("toggled") &&
        !mobileNav.contains(e.target) &&
        !mobileMenuToggle.contains(e.target)
      ) {
        closeMenu();
      }
    });

    // Предотвращаем закрытие при клике внутри меню
    mobileMenu.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  }

  // Адаптивное поведение при изменении размера окна
  window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
      // Если меню открыто на мобильном и мы переходим на десктоп
      if (mobileMenu && mobileMenu.classList.contains("toggled")) {
        mobileMenuToggle.setAttribute("aria-expanded", "false");
        mobileMenu.classList.remove("toggled");
        document.body.classList.remove("menu-open");

        const overlay = document.querySelector(".menu-overlay");
        if (overlay) {
          overlay.remove();
        }
      }
    }
  });
});

// Дополнение для мобильного меню в футере
document.addEventListener("DOMContentLoaded", function () {
  // Мобильное меню в футере
  const footerMobileToggle = document.querySelector(
    ".container-footer-mobile .menu-toggle",
  );
  const footerMobileMenu = document.querySelector(
    ".container-footer-mobile #footer-menu-mobile",
  );
  const footerMobileNav = document.querySelector(
    ".container-footer-mobile .main-navigation",
  );

  if (footerMobileToggle && footerMobileMenu) {
    footerMobileToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      const isExpanded = this.getAttribute("aria-expanded") === "true";

      if (isExpanded) {
        this.setAttribute("aria-expanded", "false");
        footerMobileMenu.classList.remove("toggled");
      } else {
        this.setAttribute("aria-expanded", "true");
        footerMobileMenu.classList.add("toggled");
      }
    });

    // Закрытие при клике на ссылку
    footerMobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", function () {
        footerMobileToggle.setAttribute("aria-expanded", "false");
        footerMobileMenu.classList.remove("toggled");
      });
    });
  }
});
