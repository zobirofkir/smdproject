const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
    if (mobileMenu.style.maxHeight) {
        mobileMenu.style.maxHeight = null; 
    } else {
        mobileMenu.classList.remove('hidden'); 
        const height = mobileMenu.scrollHeight;
        mobileMenu.style.maxHeight = `${height}px`; 
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    if (navbar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 0) {
                navbar.classList.remove("bg-transparent", "text-white");
                navbar.classList.add("bg-white", "text-black");
            } else {
                navbar.classList.remove("bg-white", "text-black");
                navbar.classList.add("bg-transparent", "text-white");
            }
        });
    }
});
