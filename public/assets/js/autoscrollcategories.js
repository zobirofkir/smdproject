const scrollContainer = document.getElementById('scroll-container');
let scrollSpeed = 1;

function scroll() {
    scrollContainer.scrollLeft += scrollSpeed;

    if (scrollContainer.scrollLeft >= scrollContainer.scrollWidth / 2) {
        scrollContainer.scrollLeft -= scrollContainer.scrollWidth / 2;
    }
}

setInterval(scroll, 20);
