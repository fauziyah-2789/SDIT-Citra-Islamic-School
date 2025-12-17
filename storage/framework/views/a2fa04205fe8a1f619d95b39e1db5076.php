<header id="navbar" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-20 relative">

        <a href="<?php echo e(route('public.landing')); ?>" class="flex flex-col justify-center z-50 leading-tight select-none">
            <div class="flex items-center gap-3">
                <img src="<?php echo e(asset('images/logo.png')); ?>" class="h-10" alt="Logo">
                <span class="text-2xl font-extrabold text-white tracking-wide drop-shadow">
                    SDIT
                </span>
            </div>
            <span class="text-sm text-white/90 ml-14 -mt-1 tracking-wide drop-shadow">
                Citra Islamic School
            </span>
        </a>

        <nav class="hidden lg:flex gap-8 text-white font-semibold text-lg absolute inset-x-0 mx-auto w-max">
            <a href="#profil" class="hover:text-amber-300 transition">Profil</a>
            <a href="#program" class="hover:text-amber-300 transition">Program</a>
            <a href="#layanan" class="hover:text-amber-300 transition">Layanan</a>
            <a href="#ppdb" class="hover:text-amber-300 transition">PPDB</a>
            <a href="#berita" class="hover:text-amber-300 transition">Berita</a>
            <a href="#galeri" class="hover:text-amber-300 transition">Galeri</a>
            <a href="#kontak" class="hover:text-amber-300 transition">Kontak</a>
        </nav>

        <div class="flex items-center gap-4 z-50">
            <button id="search-btn" class="text-white hover:text-amber-300 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                </svg>
            </button>
            <button id="hamburger-btn" class="text-white hover:text-amber-300 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="overlay-menu"
        class="fixed inset-0 bg-gradient-to-br from-emerald-800/90 to-sky-800/90 backdrop-blur-xl z-40 transform -translate-y-full 
               transition-transform duration-500 ease-in-out overflow-y-auto">

        <button id="close-menu" class="absolute top-6 right-6 text-white text-5xl font-light opacity-80 hover:opacity-100">×</button>
        
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-center">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 w-full max-w-4xl py-20">

                
                <div>
                    <h3 class="text-lg text-emerald-200 font-normal mb-8">Menu Internal</h3>
                    <ul class="space-y-6 text-xl font-normal text-white/90">
                        <li><a href="#ppdb" class="hover:text-amber-300 transition" onclick="closeOverlay()">Pendaftaran (PPDB)</a></li>
                        <li><a href="#kontak" class="hover:text-amber-300 transition" onclick="closeOverlay()">Hubungi Kami</a></li>
                        <li><a href="#galeri" class="hover:text-amber-300 transition" onclick="closeOverlay()">Galeri</a></li>
                        <li><a href="mailto:sditcitraislamicschool@gmail.com" class="hover:text-amber-300 transition" onclick="closeOverlay()">Email Pendaftaran</a></li>
                        <li><a href="https://wa.me/6285773001006" target="_blank" class="hover:text-amber-300 transition" onclick="closeOverlay()">WhatsApp Sekolah</a></li>
                        <li><a href="<?php echo e(route('dashboard')); ?>" class="hover:text-amber-300 transition" onclick="closeOverlay()">Login Sistem</a></li>
                    </ul>

                    
                    <div class="mt-12 flex space-x-6 text-white">
                        <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center hover:bg-white/20 transition" title="Facebook (Coming Soon)">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.075 12h2.51l.375-3.001h-2.885V7.07c0-.853.407-1.42 1.458-1.42h1.564V3.136C15.894 3.033 15.132 3 14.343 3c-2.868 0-4.858 1.769-4.858 4.997V9H7.014v3.001h2.471v9.999h3.59V12z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center hover:bg-white/20 transition" title="Instagram (Coming Soon)">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.855.07 1.054.047 1.775.247 2.427.502.66.257 1.206.634 1.74.887.534.254.918.572 1.341 1.002.423.429.741.805.998 1.339.255.546.455 1.258.502 2.427.058 1.27.07 1.65.07 4.855s-.012 3.584-.07 4.855c-.047 1.054-.247 1.775-.502 2.427-.257.66-.634 1.206-.887 1.74-.254.534-.572.918-1.002 1.341-.429.423-.805.741-1.339.998-.546.255-1.258.455-2.427.502-1.27.058-1.65.07-4.855.07s-3.584-.012-4.855-.07c-1.054-.047-.247-.247-.502-.502-1.27-.058-1.65-.07-4.855-.07zm0-2.163c-3.327 0-3.744.014-5.044.072-1.127.051-1.892.259-2.553.511-.67.261-1.229.645-1.791.916-.562.271-1.01.616-1.444 1.05-.433.434-.781.882-1.05 1.444-.271.562-.48 1.121-.511 1.791-.058 1.3-.072 1.716-.072 5.044s.014 3.744.072 5.044c.051 1.127.259 1.892.511 2.553.261.67.645 1.229.916 1.791.271.562.616 1.01 1.05 1.444.434.433.882.781 1.444 1.05.562.271 1.121.48 1.791.511 1.3.058 1.716.072 5.044.072s3.744-.014 5.044-.072c1.127-.051 1.892-.259 2.553-.511.67-.261.645-1.229.916-1.791.271-.562.616-1.01 1.05-1.444.434-.433.882-.781 1.444-1.05.562-.271 1.121-.48 1.791-.511-1.3-.058-1.716-.072-5.044-.072z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full border border-white flex items-center justify-center hover:bg-white/20 transition" title="Youtube (Coming Soon)">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.012c-.232-.861-.741-1.583-1.428-2.223-.687-.64-1.554-1.042-2.531-1.226C14.47 0 12 0 12 0s-2.47 0-3.656.447C7.36 0 6.493.402 5.806 1.042c-.687.64-1.196 1.362-1.428 2.223C3 4.2 3 6.945 3 12s0 7.8-1.012 9.475c.232.861.741 1.583 1.428 2.223.687.64 1.554 1.042 2.531 1.226 1.186.447 3.656.447 3.656.447s2.47 0 3.656-.447c.977-.184 1.844-.586 2.531-1.226.687-.64 1.196-1.362 1.428-2.223C21 19.8 21 17.055 21 12s0-7.8-1.385-9.475zm-9.585 13.91l-3.5-2.021a1.298 1.298 0 010-2.26l3.5-2.021a1.298 1.298 0 011.95 1.13v4.042a1.298 1.298 0 01-1.95 1.13z"/></svg>
                        </a>
                    </div>
                </div>

                
                <nav class="border-l border-sky-600/50 md:pl-10">
                    <h3 class="text-lg text-emerald-200 font-normal mb-8 block md:hidden">Menu Utama</h3>
                    <ul class="space-y-8 text-4xl font-extrabold text-white">
                        <li><a href="#profil" class="hover:text-amber-300 transition" onclick="closeOverlay()">Profil</a></li>
                        <li><a href="#program" class="hover:text-amber-300 transition" onclick="closeOverlay()">Program</a></li>
                        <li><a href="#layanan" class="hover:text-amber-300 transition" onclick="closeOverlay()">Layanan</a></li>
                        <li><a href="#berita" class="hover:text-amber-300 transition" onclick="closeOverlay()">Berita</a></li>
                        <li><a href="<?php echo e(route('public.guru.index')); ?>" class="hover:text-amber-300 transition" onclick="closeOverlay()">Guru & Staff</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const overlayMenu = document.getElementById('overlay-menu');
    const closeMenu = document.getElementById('close-menu');
    const searchBtn = document.getElementById('search-btn');

    // ** Tambahkan fungsi closeOverlay ke window agar bisa dipanggil dari HTML **
    const closeOverlay = () => overlayMenu.classList.replace('translate-y-0','-translate-y-full');
    window.closeOverlay = closeOverlay; 
    
    // Fungsi untuk mengatur tampilan navbar di posisi atas
    const setNavbarDefault = () => {
        // Hapus semua kelas scroll effect
        navbar.classList.remove('bg-gradient-to-r','from-emerald-700','to-sky-700', 'backdrop-blur-lg', 'shadow-xl');
        // Tambahkan kembali kelas untuk tampilan transparan dengan hint gradasi
        navbar.classList.add('bg-transparent', 'bg-gradient-to-r', 'from-emerald-700/10', 'to-sky-700/10');
    };

    // Fungsi untuk mengatur tampilan navbar saat di-scroll
    const setNavbarScrolled = () => {
        // Hapus kelas transparan hint
        navbar.classList.remove('bg-transparent', 'from-emerald-700/10', 'to-sky-700/10');
        // Tambahkan kelas full gradasi dan efek blur
        navbar.classList.add('bg-gradient-to-r','from-emerald-700','to-sky-700', 'backdrop-blur-lg', 'shadow-xl');
    };

    /* NAVBAR SCROLL EFFECT */
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            setNavbarScrolled();
        } else {
            setNavbarDefault();
        }
    });

    // Jalankan setting default saat DOMContentLoaded selesai (agar navbar ada hint)
    setNavbarDefault();


    /* OVERLAY CONTROL */
    const openOverlay = () => overlayMenu.classList.replace('-translate-y-full','translate-y-0');

    hamburgerBtn.addEventListener('click', openOverlay);
    closeMenu.addEventListener('click', closeOverlay);

    // Menutup overlay jika mengklik di area luar menu (tapi di dalam overlay)
    overlayMenu.addEventListener('click', e => {
        if(e.target === overlayMenu) closeOverlay();
    });

    document.addEventListener('keydown', e => {
        if(e.key === 'Escape' && overlayMenu.classList.contains('translate-y-0')) {
            closeOverlay();
        }
    });

    /* SEARCH */
    searchBtn.addEventListener('click', () => {
        alert('Search overlay ZJU mode coming soon 🚀');
    });
});
</script><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/public/navbar.blade.php ENDPATH**/ ?>