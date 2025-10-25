<x-layouts.admin title="results.blade">
<x-layouts.admin title="results.blade">






<div class="p-6">
  <h1 class="text-2xl font-bold mb-4">Hasil Pencarian untuk: <span class="text-indigo-600">"{{ $query }}"</span></h1>

  @if($berita->isEmpty() && $galeri->isEmpty() && $guru->isEmpty() && $siswa->isEmpty() && $users->isEmpty())
      <p class="text-gray-600">Tidak ada hasil ditemukan.</p>
  @else

    @if(!$berita->isEmpty())
      <h2 class="text-xl font-semibold mt-6 mb-2">📢 Berita</h2>
      <ul class="list-disc ml-5 space-y-1">
        @foreach($berita as $item)
          <li><a href="{{ route('admin.berita.edit', $item->id) }}" class="text-indigo-600 hover:underline">{{ $item->judul }}</a></li>
        @endforeach
      </ul>
    @endif

    @if(!$galeri->isEmpty())
      <h2 class="text-xl font-semibold mt-6 mb-2">🖼️ Galeri</h2>
      <ul class="list-disc ml-5 space-y-1">
        @foreach($galeri as $item)
          <li><a href="{{ route('admin.galeri.edit', $item->id) }}" class="text-indigo-600 hover:underline">{{ $item->judul }}</a></li>
        @endforeach
      </ul>
    @endif

    @if(!$guru->isEmpty())
      <h2 class="text-xl font-semibold mt-6 mb-2">👨‍🏫 Guru</h2>
      <ul class="list-disc ml-5 space-y-1">
        @foreach($guru as $item)
          <li>{{ $item->nama }} - {{ $item->mapel }}</li>
        @endforeach
      </ul>
    @endif

    @if(!$siswa->isEmpty())
      <h2 class="text-xl font-semibold mt-6 mb-2">👩‍🎓 Siswa</h2>
      <ul class="list-disc ml-5 space-y-1">
        @foreach($siswa as $item)
          <li>{{ $item->nama }} (NIS: {{ $item->nis }})</li>
        @endforeach
      </ul>
    @endif

    @if(!$users->isEmpty())
      <h2 class="text-xl font-semibold mt-6 mb-2">👤 Pengguna</h2>
      <ul class="list-disc ml-5 space-y-1">
        @foreach($users as $item)
          <li>{{ $item->name }} - {{ $item->email }}</li>
        @endforeach
      </ul>
    @endif

  @endif
</div>








</x-layouts.admin>
</x-layouts.admin>
