@extends('layouts.admin')
@section('title','Landing Page Settings')
@section('content')
<div class="max-w-4xl mx-auto">
  <h1 class="text-xl font-bold mb-4">Landing Page Settings</h1>
  @if(session('success')) <div class="p-3 bg-green-100 text-green-700 rounded mb-4">{{ session('success') }}</div> @endif

  <form action="{{ route('admin.landing.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="space-y-4">
      <div>
        <label class="block mb-1 font-semibold">Hero Title</label>
        <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full p-2 border rounded">
      </div>

      <div>
        <label class="block mb-1 font-semibold">Hero Subtitle</label>
        <textarea name="hero_sub" class="w-full p-2 border rounded">{{ $settings['hero_sub'] ?? '' }}</textarea>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Hero Image (jpg/png)</label>
        <input type="file" name="hero_image" accept="image/*" class="w-full p-2 border rounded">
        @if(!empty($settings['hero_image']))
          <img src="{{ asset('storage/'.$settings['hero_image']) }}" class="w-48 h-24 object-cover mt-2 rounded">
        @endif
      </div>

      <div>
        <label class="block mb-1 font-semibold">Tentang Sekolah (About)</label>
        <textarea name="about_text" class="w-full p-2 border rounded" rows="4">{{ $settings['about_text'] ?? '' }}</textarea>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Kurikulum</label>
        <textarea name="kurikulum_text" class="w-full p-2 border rounded" rows="3">{{ $settings['kurikulum_text'] ?? '' }}</textarea>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Kontak - Alamat</label>
        <input type="text" name="kontak_address" value="{{ $settings['kontak_address'] ?? '' }}" class="w-full p-2 border rounded">
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block mb-1 font-semibold">Kontak - Telepon</label>
          <input type="text" name="kontak_phone" value="{{ $settings['kontak_phone'] ?? '' }}" class="w-full p-2 border rounded">
        </div>
        <div>
          <label class="block mb-1 font-semibold">Kontak - Email</label>
          <input type="email" name="kontak_email" value="{{ $settings['kontak_email'] ?? '' }}" class="w-full p-2 border rounded">
        </div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Embed Map (iframe src)</label>
        <textarea name="kontak_map" class="w-full p-2 border rounded" rows="2">{{ $settings['kontak_map'] ?? '' }}</textarea>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Pendaftaran Text</label>
        <textarea name="pendaftaran_text" class="w-full p-2 border rounded" rows="3">{{ $settings['pendaftaran_text'] ?? '' }}</textarea>
      </div>

      <div class="flex gap-2">
        <button class="px-4 py-2 bg-emerald-600 text-white rounded">Simpan</button>
        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 border rounded">Kembali</a>
      </div>
    </div>
  </form>
</div>
@endsection
