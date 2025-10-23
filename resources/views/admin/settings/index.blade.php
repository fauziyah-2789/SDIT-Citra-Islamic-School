@extends('layouts.admin')

@section('title', 'Pengaturan Umum')

@section('content')
<h1 class="text-2xl font-bold mb-6 text-gray-800">Pengaturan Umum Website</h1>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow-lg p-6 md:p-10">
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nama Website</label>
                <input type="text" name="site_name" value="{{ old('site_name', $settings->site_name ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Slogan</label>
                <input type="text" name="slogan" value="{{ old('slogan', $settings->slogan ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Warna Utama (Hex)</label>
                <input type="color" name="primary_color" value="{{ old('primary_color', $settings->primary_color ?? '#4ade80') }}"
                    class="w-24 h-10 border-gray-300 rounded-md cursor-pointer">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Warna Sekunder (Hex)</label>
                <input type="color" name="secondary_color" value="{{ old('secondary_color', $settings->secondary_color ?? '#60a5fa') }}"
                    class="w-24 h-10 border-gray-300 rounded-md cursor-pointer">
            </div>
        </div>

        <div class="mt-6">
            <label class="block text-gray-700 font-semibold mb-1">Teks Footer</label>
            <textarea name="footer_text" rows="2" class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('footer_text', $settings->footer_text ?? '') }}</textarea>
        </div>

        <div class="mt-6 grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Logo Website</label>
                @if (!empty($settings->logo))
                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="w-32 h-32 object-cover rounded mb-3 border">
                @endif
                <input type="file" name="logo" class="block w-full border-gray-300 rounded-lg p-2 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Favicon</label>
                @if (!empty($settings->favicon))
                    <img src="{{ asset('storage/' . $settings->favicon) }}" alt="Favicon" class="w-16 h-16 object-cover rounded mb-3 border">
                @endif
                <input type="file" name="favicon" class="block w-full border-gray-300 rounded-lg p-2 shadow-sm">
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <button type="submit"
                class="bg-gradient-to-r from-emerald-400 to-blue-400 hover:opacity-90 text-white px-6 py-2 rounded-lg shadow-md font-semibold">
                Simpan Pengaturan
            </button>
        </div>
    </form>
</div>
@endsection
