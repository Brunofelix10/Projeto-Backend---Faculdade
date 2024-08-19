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



document.addEventListener('DOMContentLoaded', function() {
    const carouselContainers = document.querySelectorAll('.icones-nike-carousel');
    carouselContainers.forEach(carousel => {
        const container = carousel;
        const imagesContainer = container.querySelector('.icones-nike-img');
        const imgWidth = container.querySelector('img').offsetWidth;
        const imgsToScroll = 1;

        const totalImages = imagesContainer.children.length;
        for (let i = 0; i < totalImages; i++) {
            const imgClone = imagesContainer.children[i].cloneNode(true);
            imagesContainer.appendChild(imgClone);
        }

        container.addEventListener('scroll', function() {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            if (container.scrollLeft >= maxScrollLeft) {
                container.style.scrollBehavior = 'auto';
                container.scrollLeft = 1; 
                container.style.scrollBehavior = 'smooth';
            }
        });

        let autoScrollInterval;
        const startAutoScroll = () => {
            autoScrollInterval = setInterval(() => {
                if (container.scrollLeft >= container.scrollWidth / 2) {
                    container.style.scrollBehavior = 'auto';
                    container.scrollLeft = 0;
                    container.style.scrollBehavior = 'smooth';
                }
                container.scrollBy({
                    left: imgWidth * imgsToScroll,
                    behavior: 'smooth'
                });
            }, 2000);
        };

        const stopAutoScroll = () => {
            clearInterval(autoScrollInterval);
        };

        startAutoScroll();

        container.addEventListener('mouseenter', stopAutoScroll);

        container.addEventListener('mouseleave', startAutoScroll);
    });
});




