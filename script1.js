let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function redirectToWebsite(url) {
    window.location.href = url;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

// You can add an event listener to automatically advance to the next slide
setInterval(nextSlide, 5000); // Change the time interval (in milliseconds) as needed
