<header class="bg-white border-b px-6 py-3 flex justify-between items-center shadow-sm fixed top-0 w-full z-40">
  <div class="font-semibold text-gray-700">
    Panel Admin
  </div>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
      Logout
    </button>
  </form>
</header>
