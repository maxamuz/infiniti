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

// Разворачиваем карточки услуг

document.addEventListener("DOMContentLoaded", function () {
  const serviceCards = document.querySelectorAll(".servises-card-item");

  function collapseCard(card) {
    const list = card.querySelector(".servises-card-list");
    const moreButton = card.querySelector(".card-button-item");
    const visibleItems = parseInt(card.dataset.visibleItems) || 5;

    if (!list || !moreButton) return;

    const listItems = list.querySelectorAll("li");

    for (let i = visibleItems; i < listItems.length; i++) {
      listItems[i].classList.add("hidden-item");
    }
    moreButton.textContent = "Еще";
    moreButton.classList.remove("expanded"); // Удаляем класс expanded
    card._isExpanded = false;
  }

  function expandCard(card) {
    const list = card.querySelector(".servises-card-list");
    const moreButton = card.querySelector(".card-button-item");
    const visibleItems = parseInt(card.dataset.visibleItems) || 5;

    if (!list || !moreButton) return;

    const listItems = list.querySelectorAll("li");

    for (let i = visibleItems; i < listItems.length; i++) {
      listItems[i].classList.remove("hidden-item");
    }
    moreButton.textContent = "Свернуть";
    moreButton.classList.add("expanded"); // Добавляем класс expanded
    card._isExpanded = true;
  }

  function collapseAllCards(exceptCard = null) {
    serviceCards.forEach((card) => {
      if (exceptCard !== card && card._isExpanded) {
        collapseCard(card);
      }
    });
  }

  serviceCards.forEach((card) => {
    const list = card.querySelector(".servises-card-list");
    const moreButton = card.querySelector(".card-button-item");
    const visibleItems = parseInt(card.dataset.visibleItems) || 5;

    if (!list || !moreButton) return;

    const listItems = list.querySelectorAll("li");

    if (listItems.length <= visibleItems) {
      moreButton.style.display = "none";
      return;
    }

    for (let i = visibleItems; i < listItems.length; i++) {
      listItems[i].classList.add("hidden-item");
    }

    card._isExpanded = false;

    moreButton.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      if (card._isExpanded) {
        collapseCard(card);
      } else {
        collapseAllCards(card);
        expandCard(card);
      }
    });

    card.addEventListener("click", function (e) {
      if (e.target === moreButton || moreButton.contains(e.target)) {
        return;
      }

      if (card._isExpanded) {
        collapseCard(card);
      } else {
        collapseAllCards(card);
        expandCard(card);
      }
    });
  });

  document.addEventListener("click", function (e) {
    if (!e.target.closest(".servises-card-item")) {
      collapseAllCards();
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      collapseAllCards();
    }
  });
});

// JavaScript для управления cookie-согласием
document.addEventListener("DOMContentLoaded", function () {
  const cookieConsent = document.getElementById("cookieConsent");
  const cookieDocument = document.getElementById("cookieDocument");
  const cookieOverlay = document.getElementById("cookieOverlay");
  const acceptBtn = document.getElementById("acceptCookies");
  const declineBtn = document.getElementById("declineCookies");
  const documentBtn = document.getElementById("cookieDocumentBtn");
  const acceptFromDocument = document.getElementById("acceptFromDocument");

  // Проверяем, было ли уже дано согласие
  if (
    !localStorage.getItem("cookiesAccepted") &&
    !localStorage.getItem("cookiesDeclined")
  ) {
    setTimeout(() => {
      cookieConsent.classList.add("visible");
    }, 1000);
  }

  // Принять cookies
  function acceptCookies() {
    localStorage.setItem("cookiesAccepted", "true");
    localStorage.removeItem("cookiesDeclined");
    cookieConsent.classList.remove("visible");
    closeDocument();
  }

  // Отклонить cookies
  function declineCookies() {
    localStorage.setItem("cookiesDeclined", "true");
    localStorage.removeItem("cookiesAccepted");
    cookieConsent.classList.remove("visible");
    closeDocument();
  }

  // Открыть документ
  function openDocument() {
    cookieDocument.classList.add("active");
    cookieOverlay.classList.add("active");
  }

  // Закрыть документ
  function closeDocument() {
    cookieDocument.classList.remove("active");
    cookieOverlay.classList.remove("active");
  }

  // Обработчики событий
  acceptBtn.addEventListener("click", acceptCookies);
  declineBtn.addEventListener("click", declineCookies);
  documentBtn.addEventListener("click", openDocument);
  acceptFromDocument.addEventListener("click", function () {
    acceptCookies();
    closeDocument();
  });

  // Закрытие документа по клику на оверлей
  cookieOverlay.addEventListener("click", closeDocument);

  // Закрытие по клавише Escape
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && cookieDocument.classList.contains("active")) {
      closeDocument();
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const modelsSection = document.querySelector(".models"); // Находим секцию .models
  const items = document.querySelectorAll(".models-grid .models-item");
  const openButton = document.querySelector(".button-open-infiniti");
  const closeButton = document.querySelector(".button-close-infiniti");

  if (!modelsSection || !items.length || !openButton || !closeButton) {
    console.error(
      "Не найдены элементы для управления отображением карточек моделей.",
    );
    return;
  }

  const initialVisibleCount = 9;

  // Скрываем все карточки, кроме первых 9
  for (let i = initialVisibleCount; i < items.length; i++) {
    items[i].style.display = "none";
  }

  openButton.addEventListener("click", function (event) {
    event.preventDefault();

    items.forEach((item) => {
      item.style.display = "";
    });

    openButton.style.display = "none";
    closeButton.style.display = "block";
  });

  closeButton.addEventListener("click", function (event) {
    event.preventDefault();

    // Скрываем все карточки, кроме первых 9
    for (let i = initialVisibleCount; i < items.length; i++) {
      items[i].style.display = "none";
    }

    // Меняем отображение кнопок
    openButton.style.display = "block";
    closeButton.style.display = "none";

    // Прокручиваем к началу секции .models
    modelsSection.scrollIntoView({ behavior: "smooth" }); // Используем плавную прокрутку
  });
});

/**
 * Якорные ссылки страницы «Ремонт Infiniti» (быстрые ссылки из рекламы).
 *
 * Блок расположен после логики скрытия карточек услуг, поэтому обработчик
 * DOMContentLoaded выполняется уже после hideExtraCards() и может корректно
 * раскрыть скрытую карточку «Настройка VVEL» перед прокруткой.
 */
document.addEventListener("DOMContentLoaded", function () {
  const anchorIds = [
    "to-infiniti",
    "podveska-i-tormoza",
    "diagnostika-consult",
    "vvel",
    "zapchasti",
    "diagnostika-4-v-1",
    "mastera-infiniti",
    "glubokaya-diagnostika",
  ];
  const vvelId = "vvel";
  const serviceCardSelector = ".servises-cards .servises-card-item";
  const defaultOffset = 20; // Отступ от верха экрана, если якорь без липкой шапки
  const cardIconOffset = 90; // Иконка карточки вынесена над контейнером (top: -80px)
  const imageWaitTimeout = 1200;

  const anchorsExist = anchorIds.some(function (id) {
    return document.getElementById(id) !== null;
  });

  if (!anchorsExist) {
    return;
  }

  const serviceCards = document.querySelectorAll(serviceCardSelector);
  const buttonOpen = document.querySelector(".button-open");
  const buttonClose = document.querySelector(".button-close");

  // Видимая на текущем разрешении шапка (десктопная или мобильная)
  function getVisibleHeader() {
    const headers = document.querySelectorAll(
      ".container-header, .container-header-mobile",
    );

    for (let i = 0; i < headers.length; i++) {
      const styles = window.getComputedStyle(headers[i]);
      if (styles.display !== "none" && headers[i].offsetHeight > 0) {
        return headers[i];
      }
    }

    return null;
  }

  // Высота липкой/фиксированной шапки + базовый отступ
  function getAnchorOffset() {
    const header = getVisibleHeader();

    if (!header) {
      return defaultOffset;
    }

    const position = window.getComputedStyle(header).position;

    if (position !== "fixed" && position !== "sticky") {
      return defaultOffset;
    }

    return header.getBoundingClientRect().height + defaultOffset;
  }

  // Значение дублируем в CSS-переменную, чтобы scroll-margin-top совпадал с JS
  function updateAnchorOffset() {
    const offset = getAnchorOffset();
    document.documentElement.style.setProperty(
      "--anchor-offset",
      offset + "px",
    );
    return offset;
  }

  // Раскрываем все категории услуг (повторяет showAllCards из блока выше)
  function openAllServices() {
    serviceCards.forEach(function (card) {
      card.style.display = "block";
    });

    if (buttonOpen) {
      buttonOpen.style.display = "none";
    }

    if (buttonClose) {
      buttonClose.style.display = "block";
    }
  }

  function isServiceCard(element) {
    return element.classList.contains("servises-card-item");
  }

  function isHidden(element) {
    return (
      element.offsetParent === null ||
      window.getComputedStyle(element).display === "none"
    );
  }

  function nextFrame() {
    return new Promise(function (resolve) {
      window.requestAnimationFrame(function () {
        window.requestAnimationFrame(resolve);
      });
    });
  }

  // Ждём загрузки изображений, влияющих на высоту блока
  function waitForImages(container) {
    const images = Array.prototype.slice
      .call(container.querySelectorAll("img"))
      .filter(function (img) {
        return !img.complete;
      });

    if (!images.length) {
      return Promise.resolve();
    }

    const imagesLoaded = Promise.all(
      images.map(function (img) {
        return new Promise(function (resolve) {
          img.addEventListener("load", resolve, { once: true });
          img.addEventListener("error", resolve, { once: true });
        });
      }),
    );

    const timeout = new Promise(function (resolve) {
      window.setTimeout(resolve, imageWaitTimeout);
    });

    return Promise.race([imagesLoaded, timeout]);
  }

  function scrollToTarget(target) {
    let offset = updateAnchorOffset();

    if (isServiceCard(target)) {
      offset += cardIconOffset;
    }

    const top =
      target.getBoundingClientRect().top + window.pageYOffset - offset;

    window.scrollTo({
      top: Math.max(0, top),
      behavior: "auto",
    });
  }

  // Прокрутка к якорю с учётом раскрытия скрытых карточек и высоты шапки
  function handleAnchor(hash) {
    const rawHash = String(hash || "").replace(/^#/, "");
    let id = rawHash;

    try {
      id = decodeURIComponent(rawHash);
    } catch (error) {
      // Некорректная escape-последовательность в hash — используем как есть
      id = rawHash;
    }

    if (anchorIds.indexOf(id) === -1) {
      return;
    }

    const target = document.getElementById(id);

    if (!target) {
      return;
    }

    // Скрытую карточку VVEL сначала показываем, затем ждём пересчёта высоты
    if (id === vvelId && isHidden(target)) {
      openAllServices();

      nextFrame()
        .then(function () {
          return waitForImages(target);
        })
        .then(nextFrame)
        .then(function () {
          scrollToTarget(target);
        });

      return;
    }

    scrollToTarget(target);
  }

  updateAnchorOffset();
  handleAnchor(window.location.hash);

  window.addEventListener("hashchange", function () {
    handleAnchor(window.location.hash);
  });

  // Повторная прокрутка после загрузки изображений, чтобы позиция не смещалась
  window.addEventListener("load", function () {
    handleAnchor(window.location.hash);
  });

  // Шрифты также меняют высоту блоков — корректируем позицию после их загрузки
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () {
      handleAnchor(window.location.hash);
    });
  }

  let resizeTimer = null;
  window.addEventListener("resize", function () {
    window.clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(updateAnchorOffset, 200);
  });
});

// reveal on scroll
const revealEls = document.querySelectorAll(".reveal");
const io = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("in");
        io.unobserve(e.target);
      }
    });
  },
  { threshold: 0.12 },
);
revealEls.forEach((el) => io.observe(el));
