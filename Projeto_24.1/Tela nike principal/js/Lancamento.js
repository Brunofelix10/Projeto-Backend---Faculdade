document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.container-cards-carousel');
    carousels.forEach(carousel => {
        const container = carousel;
        const prevButton = carousel.closest('.container-all').querySelector('.prev-button');
        const nextButton = carousel.closest('.container-all').querySelector('.next-button');
        const cardWidth = container.querySelector('.card').offsetWidth;
        const cardsToScroll = 4;

        prevButton.addEventListener('click', function() {
            container.scrollBy({
                left: -cardWidth * cardsToScroll,
                behavior: 'smooth'
            });
        });

        nextButton.addEventListener('click', function() {
            container.scrollBy({
                left: cardWidth * cardsToScroll,
                behavior: 'smooth'
            });
        });

        container.addEventListener('scroll', function() {
            const scrollLeft = container.scrollLeft;
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            prevButton.style.display = scrollLeft > 0 ? 'block' : 'none';
            nextButton.style.display = scrollLeft < maxScrollLeft ? 'block' : 'none';
        });

        // Initial check to hide/show buttons
        const scrollLeft = container.scrollLeft;
        const maxScrollLeft = container.scrollWidth - container.clientWidth;
        prevButton.style.display = scrollLeft > 0 ? 'block' : 'none';
        nextButton.style.display = scrollLeft < maxScrollLeft ? 'block' : 'none';
    });
});


document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.querySelector('.theme-checkbox');
    const body = document.body;

    const toggleDarkMode = () => {
        if (checkbox.checked) {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
        }
    };

    checkbox.addEventListener('change', toggleDarkMode);

    toggleDarkMode();
});