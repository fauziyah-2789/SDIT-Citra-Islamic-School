import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'trix/dist/trix.css';
import 'trix';

// Inisialisasi Alpine
window.Alpine = Alpine;
Alpine.start();

// Jalankan script setelah semua konten dimuat
document.addEventListener('DOMContentLoaded', () => {
    // Inisialisasi animasi AOS
    AOS.init({
        duration: 800,  // durasi animasi dalam milidetik
        once: true,     // animasi hanya dijalankan sekali
        offset: 100,    // jarak offset sebelum animasi dimulai
    });

    // Mode Gelap / Terang
    const html = document.documentElement;
    const themeToggle = document.getElementById('theme-toggle');

    // Jika tombol toggle tersedia
    if (themeToggle) {
        // Saat tombol diklik, ubah mode
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.theme = html.classList.contains('dark') ? 'dark' : 'light';
        });

        // Cek preferensi tersimpan sebelumnya
        if (localStorage.theme === 'dark') {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }
    }
});
