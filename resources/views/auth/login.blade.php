<x-layouts.guest title="Login">
    <div class="flex min-h-screen items-center justify-center bg-gray-100">
        <div class="w-full max-w-md p-6 bg-white rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

            {{-- Error message --}}
            @if ($errors->any())
                <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form login --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           required autofocus
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Lupa password?</a>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </button>
            </form>
        </div>
    </div>
</x-layouts.guest>
