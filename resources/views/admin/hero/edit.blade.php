@extends('layouts.admin')

@section('title', 'Edit Hero')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Landing Hero</h1>

    <form action="{{ route('admin.hero.update', $hero) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block mb-2 font-semibold">Judul</label>
        <input type="text" name="title" value="{{ old('title', $hero->title) }}" class="w-full p-2 mb-4 border rounded">

        <label class="block mb-2 font-semibold">Subjudul</label>
        <textarea name="subtitle" class="w-full p-2 mb-4 border rounded">{{ old('subtitle', $hero->subtitle) }}</textarea>

        <label class="block mb-2 font-semibold">Teks CTA</label>
        <input type="text" name="cta_text" value="{{ old('cta_text', $hero->cta_text) }}" class="w-full p-2 mb-4 border rounded">

        <label class="block mb-2 font-semibold">Link CTA</label>
        <input type="text" name="cta_link" value="{{ old('cta_link', $hero->cta_link) }}" class="w-full p-2 mb-4 border rounded">

        <label class="block mb-2 font-semibold">Gambar Hero</label>
        <input type="file" name="image" class="mb-4">
        @if($hero->image)
            <img src="{{ asset('storage/'.$hero->image) }}" alt="Hero" class="w-full mb-4 rounded">
        @endif

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Simpan Perubahan</button>
    </form>
</div>
@endsection
