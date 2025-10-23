<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        // sementara kosong, nanti bisa isi setting website dsb
        return view('admin.settings.index');
    }
}
