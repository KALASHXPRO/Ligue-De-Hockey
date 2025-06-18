document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dots .dot');
    const prevBtn = document.querySelector('.carousel-arrow.left');
    const nextBtn = document.querySelector('.carousel-arrow.right');
    let current = 0;
    let interval;

    function showSlide(idx) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === idx);
            dots[i].classList.toggle('active', i === idx);
        });
        current = idx;
    }

    function nextSlide() {
        let idx = (current + 1) % slides.length;
        showSlide(idx);
    }

    function prevSlide() {
        let idx = (current - 1 + slides.length) % slides.length;
        showSlide(idx);
    }

    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetInterval();
    });
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetInterval();
    });
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            showSlide(i);
            resetInterval();
        });
    });

    function startInterval() {
        interval = setInterval(nextSlide, 4000);
    }
    function resetInterval() {
        clearInterval(interval);
        startInterval();
    }

    showSlide(0);
    startInterval();

    // Pause on hover
    document.querySelector('.carousel-modern').addEventListener('mouseenter', () => clearInterval(interval));
    document.querySelector('.carousel-modern').addEventListener('mouseleave', startInterval);
}); 