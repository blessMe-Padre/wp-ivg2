window.addEventListener('DOMContentLoaded', () => {

    const navBtn = document.querySelector('.nav-button');
    const nav = document.querySelector('.nav');
    const body = document.querySelector('body');
    const gallery = document.querySelector('.gallery');
    const singleGallery = document.querySelector('.single-gallery');

    navBtn.addEventListener('click', () => {
        navBtn.classList.toggle("is-active");
        nav.classList.toggle("is-active");
        body.classList.toggle("body-lock");
    });

    const swiperAbout = new Swiper('.about__wrapper', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },

        navigation: {
            nextEl: '.about-swiper-button-prev',
            prevEl: '.about-swiper-button-next',
        },
    });

    const swiper = new Swiper('.training__wrapper', {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 40,

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            600: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },

            1023: {
                slidesPerView: 3,
                spaceBetween: 30
            },
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const swiperReviews = new Swiper('.training-reviews__slider', {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 40,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: 'true',
        },
    });

    const swiperVideoReviews = new Swiper('.video-review__wrapper', {
        slidesPerView: 2,
        loop: true,
        spaceBetween: 40,

        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.video-review-next',
            prevEl: '.video-review-prev',
        },

    });

    swiperVideoReviews.on('slideChange', function () {
        let video = document.querySelectorAll(".video-item");
        video.forEach((el) => {
            el.pause();
        })
    });

    const swiperPreviously = new Swiper('.previously-slider', {
        loop: true,
        spaceBetween: 40,

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            767: {
                slidesPerView: 3,
                spaceBetween: 40
            },

            1023: {
                slidesPerView: 4,
                spaceBetween: 40
            },

            1680: {
                slidesPerView: 5,
                spaceBetween: 40
            }

        },

        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: 'true'
        },

    });


    // Masonry
    let elem = document.querySelector('.main-articles__list');
    if (elem) {
        let msnry = new Masonry(elem, {
            // options
            itemSelector: '.main-articles__item',
            gutter: 30,
        });
    }


    // baguetteBox
    if (gallery) {
        baguetteBox.run('.gallery');
    }

    if (singleGallery) {
        baguetteBox.run('.single-gallery');
    }

    //accordions
    const accordions = document.querySelectorAll("._tabs-accordion");

    accordions.forEach(el => {
        const button = el.querySelector('._tabs-button');
        const content = el.querySelector('._tabs-content');

        button.addEventListener('click', (evt) => {
            evt.preventDefault();
            const currentButton = evt.currentTarget;

            currentButton.classList.toggle('_active');
            content.classList.toggle('_active');

            if (currentButton.classList.contains('_active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = null;
            }

        });
    });

    //Tabs
    const tabButtons = document.querySelectorAll("._tabs-item");
    const tabs_blocks = document.querySelectorAll("._tabs-block");

    tabButtons.forEach(button => {
        button.addEventListener('click', (evt) => {
            evt.preventDefault();
            const targetBtn = evt.currentTarget;
            const targetBtnId = targetBtn.getAttribute('data-tab');
            const currentTab = document.querySelector(targetBtnId);

            if (!targetBtn.classList.contains('_active')) {
                tabButtons.forEach(button => {
                    button.classList.remove('_active');
                });

                tabs_blocks.forEach(button => {
                    button.classList.remove('_active');
                });

                targetBtn.classList.add('_active');
                currentTab.classList.add('_active');
            }
        });
    })

    // animations

    function onEntry(entry) {
        entry.forEach(change => {
            if (change.isIntersecting) {
                change.target.classList.add('_element-show');
            }
        });
    }

    let observer = new IntersectionObserver(onEntry, { threshold: [0.2] });
    let animElements = document.querySelectorAll('._element-animation');

    for (let element of animElements) {
        observer.observe(element);
    }
});