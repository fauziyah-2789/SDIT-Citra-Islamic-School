{{-- resources/views/components/icons/star.blade.php --}}
@props(['class' => 'w-6 h-6'])

<svg {{ $attributes->merge(['class' => $class]) }} fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.621-.921 1.921 0l2.553 7.846h8.257c.969 0 1.371 1.24.588 1.81l-6.68 4.857 2.553 7.846c.3.921-.755 1.688-1.54 1.111L12 18.23l-6.68 4.857c-.785.577-1.84-.19-1.54-1.111l2.553-7.846-6.68-4.857c-.783-.57-.38-1.81.588-1.81h8.257l2.553-7.846z"></path>
</svg>