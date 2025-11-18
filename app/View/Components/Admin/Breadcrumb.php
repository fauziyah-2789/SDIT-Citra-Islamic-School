<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public array $items = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $currentRoute = request()->path(); // contoh: admin/berita/edit/5
        $segments = collect(explode('/', $currentRoute))
            ->reject(fn($segment) => is_numeric($segment)); // nomor ID diabaikan

        // Buat breadcrumb otomatis
        $url = '';
        foreach ($segments as $segment) {
            $url .= '/' . $segment;
            $this->items[] = [
                'name' => ucfirst(str_replace('-', ' ', $segment)),
                'url' => url($url),
            ];
        }
    }

    /**
     * Get the view that represents the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.breadcrumb', [
            'items' => $this->items
        ]);
    }
}
