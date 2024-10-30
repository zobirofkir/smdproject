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
