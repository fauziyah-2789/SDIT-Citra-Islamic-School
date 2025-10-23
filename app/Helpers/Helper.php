<?php

if (!function_exists('formatTanggal')) {
    function formatTanggal($date, $format = 'd-m-Y') {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}

if (!function_exists('rupiah')) {
    function rupiah($angka) {
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}

if (!function_exists('activeMenu')) {
    function activeMenu($routeName) {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
