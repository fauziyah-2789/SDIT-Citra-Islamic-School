<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ProfilSekolah;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View Composer: Kirim $profil ke semua view yang menggunakan layout guest
        View::composer('layouts.guest', function ($view) {
            $profil = ProfilSekolah::first();
            $view->with('profil', $profil);
        });

        // Jika ingin $profil tersedia di semua view, bisa pakai wildcard:
        // View::composer('*', function ($view) {
        //     $view->with('profil', ProfilSekolah::first());
        // });
    }
}
