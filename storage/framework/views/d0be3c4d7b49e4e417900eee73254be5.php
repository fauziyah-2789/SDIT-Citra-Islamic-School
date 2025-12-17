<footer class="bg-gradient-to-r from-emerald-700 to-sky-700 text-white py-16 mt-20">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10 border-b border-sky-500/50 pb-10">

        
        <div>
            <div class="flex items-center gap-2 mb-3">
                <img src="<?php echo e(asset('images/logo.png')); ?>" class="h-8" alt="Logo SDIT">
                <span class="text-xl font-extrabold text-white tracking-wide">SDIT</span>
            </div>
            <span class="text-sm text-white/90 tracking-wide block mb-4">Citra Islamic School</span>
            <p class="text-sm leading-relaxed text-emerald-100">
                Sekolah Islam terpadu yang berfokus pada pembinaan karakter, akademik, dan kreativitas peserta didik.
            </p>
        </div>

        
        <div>
            <h3 class="text-white font-bold text-lg mb-5 border-l-4 border-amber-300 pl-3">Menu Utama</h3>
            <ul class="space-y-3 text-base">
                <li><a href="<?php echo e(route('public.profil.index')); ?>" class="hover:text-amber-300 transition">Profil Sekolah</a></li>
                <li><a href="<?php echo e(route('public.ekstrakurikuler.index')); ?>" class="hover:text-amber-300 transition">Ekstrakurikuler</a></li>
                <li><a href="<?php echo e(route('public.prestasi.index')); ?>" class="hover:text-amber-300 transition">Prestasi</a></li>
                <li><a href="<?php echo e(route('public.guru.index')); ?>" class="hover:text-amber-300 transition">Tenaga Pendidik</a></li>
            </ul>
        </div>

        
        <div>
            <h3 class="text-white font-bold text-lg mb-5 border-l-4 border-amber-300 pl-3">Informasi</h3>
            <ul class="space-y-3 text-base">
                <li><a href="<?php echo e(route('public.berita.index')); ?>" class="hover:text-amber-300 transition">Berita Terbaru</a></li>
                <li><a href="<?php echo e(route('public.galeri.index')); ?>" class="hover:text-amber-300 transition">Galeri Kegiatan</a></li>
                <li><a href="<?php echo e(route('public.pengumuman.index')); ?>" class="hover:text-amber-300 transition">Pengumuman</a></li>
                <li><a href="<?php echo e(route('pendaftaran')); ?>" class="hover:text-amber-300 transition">PPDB Online</a></li>
            </ul>
        </div>

        
        <div>
            <h3 class="text-white font-bold text-lg mb-5 border-l-4 border-amber-300 pl-3">Kontak Kami</h3>
            <div class="space-y-3 text-base">
                
                <a href="https://maps.app.goo.gl/GPtetoK19x4GELnFA" target="_blank" class="flex items-start group hover:text-amber-300 transition">
                    <svg class="w-5 h-5 text-amber-300 group-hover:text-amber-200 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0L6.343 16.657A8 8 0 1117.657 16.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Jl. Contoh Alamat No.123
                </a>
                
                
                <a href="mailto:sditcitraislamicschool@gmail.com" class="flex items-center group hover:text-amber-300 transition">
                    <svg class="w-5 h-5 text-amber-300 group-hover:text-amber-200 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.84 5.234a3 3 0 003.74 0L21 8M3 8a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/></svg>
                    sditcitraislamicschool@gmail.com
                </a>
                
                
                <a href="tel:+6285773001006" class="flex items-center group hover:text-amber-300 transition">
                    <svg class="w-5 h-5 text-amber-300 group-hover:text-amber-200 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.074 1.037a11.001 11.001 0 008.312 8.312l1.037-2.074a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-11a2 2 0 01-2-2v-4a2 2 0 012-2z"/></svg>
                    +62 857-7300-1006
                </a>
            </div>
        </div>
    </div>

    <div class="text-center text-emerald-100 text-sm mt-10 pt-4">
        &copy; <?php echo e(date('Y')); ?> SDIT Citra Islamic School. All Rights Reserved.
    </div>
</footer><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/public/footer.blade.php ENDPATH**/ ?>