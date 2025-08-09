import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const menuIcon = document.getElementById("menu-bars");
const mobileMenu = document.getElementById("mobile-menu");

menuIcon.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});

// Optional: Hide menu if clicked outside
document.addEventListener("click", function (e) {
    if (!menuIcon.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add("hidden");
    }
});

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        menuIcon.classList.add("hidden");
    } else {
        menuIcon.classList.remove("hidden");
    }
});

mobileMenu.classList.toggle("hidden");
mobileMenu.classList.toggle("scale-y-100");
mobileMenu.classList.toggle("scale-y-0");

