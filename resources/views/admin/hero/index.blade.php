@extends('layouts.admin')

@section('title','Hero Landing Page')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Hero Landing Page</h2>

    <form action="{{ route('admin.hero.update',$hero->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label>Title</label>
            <input type="text" name="title" value="{{ $hero->title }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label>Subtitle</label>
            <textarea name="subtitle" class="w-full border p-2 rounded">{{ $hero->subtitle }}</textarea>
        </div>
        <div class="mb-4">
            <label>CTA Text</label>
            <input type="text" name="cta_text" value="{{ $hero->cta_text }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label>CTA Link</label>
            <input type="text" name="cta_link" value="{{ $hero->cta_link }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label>Ganti Foto Hero</label>
            <input type="file" name="image" class="w-full">
            @if($hero->image)
                <img src="{{ asset('storage/'.$hero->image) }}" class="mt-2 w-64">
            @endif
        </div>
        <button class="px-6 py-2 bg-blue-600 text-white rounded">Update Hero</button>
    </form>
</div>
@endsection
