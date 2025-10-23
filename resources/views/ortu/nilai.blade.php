@extends('layouts.ortu')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Nilai Anak</h1>
    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Mata Pelajaran</th>
                <th class="px-4 py-2">Tugas/Soal</th>
                <th class="px-4 py-2">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $n)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $n->soal->judul ?? '-' }}</td>
                <td class="px-4 py-2">{{ $n->soal->pertanyaan ?? '-' }}</td>
                <td class="px-4 py-2">{{ $n->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $nilais->links() }}
    </div>
</div>
@endsection
