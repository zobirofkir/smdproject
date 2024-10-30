let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('#slider > div');
    const totalSlides = slides.length;
    currentSlide = (index + totalSlides) % totalSlides; // Loop back to start
    const offset = -currentSlide * 100; // Calculate offset
    document.querySelector('#slider').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}
