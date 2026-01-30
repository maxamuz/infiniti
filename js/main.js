document.addEventListener('DOMContentLoaded', function() {
    // Получаем элементы
    const cardsContainer = document.querySelector('.servises-cards');
    const cards = document.querySelectorAll('.servises-card-item');
    const buttonOpen = document.querySelector('.button-open');
    const buttonClose = document.querySelector('.button-close');
    
    // Количество карточек для показа по умолчанию
    const defaultVisibleCards = 6;
    
    // Функция для скрытия лишних карточек
    function hideExtraCards() {
        cards.forEach((card, index) => {
            if (index >= defaultVisibleCards) {
                card.style.display = 'none';
            } else {
                card.style.display = 'block';
            }
        });
        
        // Показываем кнопку "Раскрыть" и скрываем "Свернуть"
        buttonOpen.style.display = 'block';
        buttonClose.style.display = 'none';
    }
    
    // Функция для показа всех карточек
    function showAllCards() {
        cards.forEach(card => {
            card.style.display = 'block';
        });
        
        // Показываем кнопку "Свернуть" и скрываем "Раскрыть"
        buttonOpen.style.display = 'none';
        buttonClose.style.display = 'block';
    }
    
    // Инициализация: скрываем лишние карточки при загрузке
    hideExtraCards();
    
    // Обработчик клика на кнопку "Раскрыть все категории услуг"
    buttonOpen.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Сохраняем позицию прокрутки до открытия
        const scrollPosition = window.pageYOffset;
        
        // Показываем все карточки
        showAllCards();
        
        // Возвращаемся на ту же позицию прокрутки
        window.scrollTo({
            top: scrollPosition,
            behavior: 'instant' // или 'auto' - без анимации
        });
        
        // Опционально: плавная прокрутка к первой новой карточке
        setTimeout(() => {
            if (cards[defaultVisibleCards]) {
                cards[defaultVisibleCards].scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'nearest'
                });
            }
        }, 50); // Небольшая задержка для отрисовки новых элементов
    });
    
    // Обработчик клика на кнопку "Свернуть категории услуг"
    buttonClose.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Сохраняем позицию прокрутки до закрытия
        const scrollPosition = window.pageYOffset;
        
        // Скрываем лишние карточки
        hideExtraCards();
        
        // Возвращаемся на ту же позицию прокрутки
        window.scrollTo({
            top: scrollPosition,
            behavior: 'instant'
        });
        
        // Опционально: плавная прокрутка к кнопке "Раскрыть"
        setTimeout(() => {
            buttonOpen.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'nearest'
            });
        }, 50);
    });
});