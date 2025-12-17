import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    // AOS
    AOS.init({ duration: 800, once: true, offset: 100 });

    // Navbar blur saat scroll
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            navbar.classList.add('bg-white/30', 'backdrop-blur-xl', 'shadow-md');
            navbar.classList.remove('bg-transparent', 'backdrop-blur-none');
        } else {
            navbar.classList.remove('bg-white/30', 'backdrop-blur-xl', 'shadow-md');
            navbar.classList.add('bg-transparent', 'backdrop-blur-none');
        }
    });

    // Hamburger overlay
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const overlayMenu = document.getElementById('overlay-menu');
    const closeMenu = document.getElementById('close-menu');

    const openOverlay = () => {
        overlayMenu.classList.remove('-translate-y-full');
        overlayMenu.classList.add('translate-y-0');
    };
    const closeOverlay = () => {
        overlayMenu.classList.remove('translate-y-0');
        overlayMenu.classList.add('-translate-y-full');
    };

    hamburgerBtn.addEventListener('click', openOverlay);
    closeMenu.addEventListener('click', closeOverlay);

    // Klik di luar overlay
    overlayMenu.addEventListener('click', e => {
        if (e.target === overlayMenu) closeOverlay();
    });

    // ESC key
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && overlayMenu.classList.contains('translate-y-0')) closeOverlay();
    });
});
