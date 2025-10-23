@extends('layouts.admin')

@section('title', 'Pesan Kontak')

@section('content')
<div class="p-6 bg-white rounded-2xl shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-emerald-600">Pesan Masuk dari Pengunjung</h1>
    </div>

    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gradient-to-r from-emerald-300 to-blue-300 text-white">
            <tr>
                <th class="py-3 px-4 text-left">No</th>
                <th class="py-3 px-4 text-left">Nama</th>
                <th class="py-3 px-4 text-left">Email</th>
                <th class="py-3 px-4 text-left">Pesan</th>
                <th class="py-3 px-4 text-center">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pesans as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 font-medium text-gray-700">{{ $item->nama }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $item->email }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ Str::limit($item->pesan, 70) }}</td>
                    <td class="py-3 px-4 text-center text-gray-500">{{ $item->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-6 text-center text-gray-500">Belum ada pesan masuk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
