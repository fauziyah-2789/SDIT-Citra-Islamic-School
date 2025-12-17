{{-- resources/views/components/list-panel.blade.php --}}
@props(['title', 'items'])

<div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
    <h4 class="text-lg font-bold text-indigo-800 mb-4 border-b pb-2">{{ $title }}</h4>
    <ul class="space-y-3">
        @foreach ($items as $item)
            <li class="flex items-start">
                <x-icons.check class="w-5 h-5 text-green-500 mt-1 flex-shrink-0 mr-2" />
                <span class="text-gray-700">{{ $item }}</span>
            </li>
        @endforeach
    </ul>
</div>