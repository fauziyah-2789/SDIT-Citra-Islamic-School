@extends('layouts.admin')
@section('title','Program Sekolah')
@section('content')
<div class="space-y-4">
  <div class="flex justify-between items-center">
    <h1 class="text-xl font-bold">Program Sekolah</h1>
    <a href="{{ route('admin.programs.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded">Tambah Program</a>
  </div>

  @if(session('success')) <div class="p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div> @endif

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @forelse($programs as $p)
      <div class="p-4 bg-white rounded shadow">
        <h3 class="font-semibold">{{ $p->judul }}</h3>
        <p class="text-sm text-gray-600">{{ Str::limit($p->deskripsi,120) }}</p>
        <div class="mt-3 flex gap-2">
          <a href="{{ route('admin.programs.edit', $p->id) }}" class="px-3 py-1 border rounded">Edit</a>
          <form action="{{ route('admin.programs.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
            @csrf @method('DELETE')
            <button class="px-3 py-1 bg-red-500 text-white rounded">Hapus</button>
          </form>
        </div>
      </div>
    @empty
      <div class="p-4 bg-white rounded">Belum ada program.</div>
    @endforelse
  </div>
</div>
@endsection
