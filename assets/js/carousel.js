document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel-slide');
    const navDots = document.querySelectorAll('.nav-dot');
    let currentSlideIndex = 0;
    let autoPlayInterval;

    // Utility: reset animations for elements in a slide
    function resetSlide(slide) {
        slide.classList.remove('active');
        const p = slide.querySelector('p');
        const btns = slide.querySelector('.buttons');
        const img = slide.querySelector('.image-container');
        if (p) p.style.animation = 'none';
        if (btns) btns.style.animation = 'none';
        if (img) img.style.animation = 'none';
    }

    // Init Typed.js heading
    function initTypedHeading(targetEl, headingText, onCompleteCallback) {
        // Clear previous instance
        if (window._typedHeadingInstance) {
            try { window._typedHeadingInstance.destroy(); } catch (e) { }
            window._typedHeadingInstance = null;
        }

        // Reset this slide's heading container
        if (targetEl) targetEl.innerHTML = '';

        const typedString = headingText || "Default <br> Heading Text";

        // New typed instance for this slide
        window._typedHeadingInstance = new Typed(targetEl, {
            strings: [typedString],
            typeSpeed: 30,
            startDelay: 100,
            backSpeed: 0,
            showCursor: true,
            cursorChar: '|',
            smartBackspace: false,
            onComplete: function () {
                if (typeof onCompleteCallback === 'function') onCompleteCallback();
            }
        });
    }
    function showSlide(index) {
        slides.forEach(slide => resetSlide(slide));

        const activeSlide = slides[index];
        activeSlide.classList.add('active');
        navDots.forEach(dot => dot.classList.remove('active'));
        navDots[index].classList.add('active');

        const headingEl = activeSlide.querySelector('#typed-heading');
        const headingText = activeSlide.dataset.heading || "Default Hero Heading Text";

        initTypedHeading(headingEl, headingText, () => {
            const p = activeSlide.querySelector('p');
            const btns = activeSlide.querySelector('.buttons');
            const img = activeSlide.querySelector('.image-container');

            if (p) p.style.animation = 'fadeIn 1s ease-in-out forwards';
            setTimeout(() => {
                if (btns) btns.style.animation = 'fadeIn 1s ease-in-out forwards';
                setTimeout(() => {
                    if (img) img.style.animation = 'slideUpFadeIn .5s ease-in-out forwards';
                }, 100);
            }, 800);
        });
    }

    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        showSlide(currentSlideIndex);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 8000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    // Manual nav
    window.currentSlide = function (index) {
        stopAutoPlay();
        currentSlideIndex = index;
        showSlide(currentSlideIndex);
        startAutoPlay();
    };

    // Initial load
    showSlide(currentSlideIndex);
    startAutoPlay();
});
