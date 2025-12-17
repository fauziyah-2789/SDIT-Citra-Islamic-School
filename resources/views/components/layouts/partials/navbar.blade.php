<nav class="fixed w-full z-50 bg-white/30 backdrop-blur-md shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/') }}" class="text-gray-800 hover:text-blue-600 font-medium">Home</a>
                <a href="{{ url('/berita-publik') }}" class="text-gray-800 hover:text-blue-600 font-medium">Berita</a>
                <a href="{{ url('/ppdb') }}" class="text-gray-800 hover:text-blue-600 font-medium">PPDB</a>
                <!-- Search -->
                <div>
                    <form action="{{ url('/search') }}" method="GET" class="relative">
                        <input type="text" name="q" placeholder="Cari..." class="px-3 py-1 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="absolute right-1 top-1 text-gray-500 hover:text-blue-600">
                            🔍
                        </button>
                    </form>
                </div>
            </div>

            <!-- Hamburger Button -->
            <div class="md:hidden flex items-center">
                <button id="hamburger-btn" class="text-gray-800 hover:text-blue-600 focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Hamburger Overlay -->
    <div id="hamburger-overlay" class="fixed inset-0 bg-white z-50 hidden flex-col items-center justify-center space-y-6 p-6 overflow-auto">
        <button id="close-btn" class="absolute top-6 right-6 text-gray-800 hover:text-blue-600 text-3xl">×</button>
        <a href="{{ url('/') }}" class="text-2xl font-medium text-gray-800 hover:text-blue-600">Home</a>
        <a href="{{ url('/berita-publik') }}" class="text-2xl font-medium text-gray-800 hover:text-blue-600">Berita</a>
        <a href="{{ url('/ppdb') }}" class="text-2xl font-medium text-gray-800 hover:text-blue-600">PPDB</a>
        <a href="{{ url('/kontak') }}" class="text-2xl font-medium text-gray-800 hover:text-blue-600">Kontak</a>
        <!-- Social -->
        <div class="flex space-x-4 mt-6">
            <a href="https://instagram.com" target="_blank" class="text-gray-800 hover:text-pink-500">IG</a>
            <a href="mailto:info@example.com" class="text-gray-800 hover:text-green-500">Email</a>
        </div>
        <!-- Search -->
        <div class="mt-6 w-full max-w-sm">
            <form action="{{ url('/search') }}" method="GET" class="flex">
                <input type="text" name="q" placeholder="Cari..." class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="px-4 bg-blue-600 text-white rounded-r-md hover:bg-blue-700">Cari</button>
            </form>
        </div>
    </div>
</nav>

<script>
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const hamburgerOverlay = document.getElementById('hamburger-overlay');
    const closeBtn = document.getElementById('close-btn');

    hamburgerBtn.addEventListener('click', () => {
        hamburgerOverlay.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        hamburgerOverlay.classList.add('hidden');
    });

    // Close overlay on outside click
    window.addEventListener('click', (e) => {
        if(e.target === hamburgerOverlay) {
            hamburgerOverlay.classList.add('hidden');
        }
    });
</script>
