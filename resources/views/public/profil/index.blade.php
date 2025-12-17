@extends('components.layouts.guest')

@section('content')

    {{-- HERO SECTION PROFIL (Simple & Clean) --}}
    <section class="py-24 bg-indigo-700/80 text-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-extrabold mb-3">{{ $page_title ?? 'Profil Sekolah' }}</h1>
            <p class="text-xl text-indigo-100">Menjelaskan visi, misi, dan komitmen kami dalam mendidik generasi masa depan.</p>
        </div>
    </section>

    {{-- VISI & MISI SECTION --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12">
            
            {{-- Visi --}}
            <div>
                <h2 class="text-4xl font-bold text-green-600 mb-6 border-b-2 border-green-200 pb-2">Visi Sekolah</h2>
                <blockquote class="text-2xl italic text-gray-800 border-l-4 border-green-500 pl-4 leading-relaxed">
                    "{{ $profil['visi'] ?? 'Visi Sekolah belum diatur.' }}"
                </blockquote>
            </div>

            {{-- Misi --}}
            <div>
                <h2 class="text-4xl font-bold text-indigo-600 mb-6 border-b-2 border-indigo-200 pb-2">Misi Sekolah</h2>
                <ul class="space-y-4 text-lg text-gray-700">
                    {{-- Baris di bawah ini adalah tempat error foreach sebelumnya --}}
                    @forelse ($profil['misi'] ?? [] as $misi)
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-6 h-6 text-indigo-500 mr-3 mt-1 flex-shrink-0"/>
                            <span>{{ $misi }}</span>
                        </li>
                    @empty
                        <p>Misi belum diatur.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    {{-- SEJARAH & FILOSOFI --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Sejarah Singkat & Filosofi</h2>
            
            <div class="grid md:grid-cols-2 gap-10">
                <div class="p-8 bg-white rounded-xl shadow-lg border-t-4 border-green-500">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Sejarah Sekolah</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $profil['sejarah'] ?? 'Sejarah sekolah belum diatur.' }}</p>
                </div>
                <div class="p-8 bg-white rounded-xl shadow-lg border-t-4 border-indigo-500">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Filosofi Pendidikan</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $profil['filosofi'] ?? 'Filosofi pendidikan belum diatur.' }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
