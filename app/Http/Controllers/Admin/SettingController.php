<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class SettingController extends Controller
{
    public function index()
    {
        // Ambil data pengaturan pertama (hanya 1 baris)
        $settings = GeneralSetting::first();

        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah'          => 'required|string|max:255',
            'email_kontak'          => 'required|email|max:255',
            'no_telp'               => 'required|string|max:20',
            'alamat'                => 'required|string',
            'tahun_akademik_aktif'  => 'required|string|max:10',
            'logo_url'              => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $settings = new GeneralSetting();
        $settings->nama_sekolah = $request->nama_sekolah;
        $settings->email_kontak = $request->email_kontak;
        $settings->no_telp = $request->no_telp;
        $settings->alamat = $request->alamat;
        $settings->tahun_akademik_aktif = $request->tahun_akademik_aktif;

        // Upload logo jika ada
        if ($request->hasFile('logo_url')) {
            $path = $request->file('logo_url')->store('public/settings');
            $settings->logo_url = str_replace('public/', 'storage/', $path);
        }

        $settings->save();

        return redirect()->route('admin.settings.index')
                         ->with('success', 'Pengaturan berhasil disimpan.');
    }

    public function update(Request $request, GeneralSetting $setting)
    {
        $request->validate([
            'nama_sekolah'          => 'required|string|max:255',
            'email_kontak'          => 'required|email|max:255',
            'no_telp'               => 'required|string|max:20',
            'alamat'                => 'required|string',
            'tahun_akademik_aktif'  => 'required|string|max:10',
            'logo_url'              => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $setting->nama_sekolah = $request->nama_sekolah;
        $setting->email_kontak = $request->email_kontak;
        $setting->no_telp = $request->no_telp;
        $setting->alamat = $request->alamat;
        $setting->tahun_akademik_aktif = $request->tahun_akademik_aktif;

        if ($request->hasFile('logo_url')) {
            $path = $request->file('logo_url')->store('public/settings');
            $setting->logo_url = str_replace('public/', 'storage/', $path);
        }

        $setting->save();

        return redirect()->route('admin.settings.index')
                         ->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
