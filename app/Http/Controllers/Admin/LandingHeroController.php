<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LandingHero;
use App\Models\Ekstrakurikuler;
use App\Models\Statistik;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingHeroController extends Controller

{
    // Hero
    public function heroIndex() {
        $hero = LandingHero::first();
        return view('admin.hero.index', compact('hero'));
    }

    public function heroUpdate(Request $request, $id) {
        $hero = LandingHero::findOrFail($id);
        $data = $request->only(['title','subtitle','cta_text','cta_link']);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('hero', 'public');
            $data['image'] = $path;
        }

        $hero->update($data);
        return redirect()->back()->with('success', 'Hero berhasil diupdate');
    }

    // Ekstrakurikuler
    public function ekstrakurikulerIndex() {
        $ekstras = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler.index', compact('ekstras'));
    }

    public function ekstrakurikulerUpdate(Request $request, $id) {
        $ekstra = Ekstrakurikuler::findOrFail($id);
        $ekstra->update($request->only(['name','icon','description','color_bg','color_text']));
        return redirect()->back()->with('success','Ekstrakurikuler berhasil diupdate');
    }

    // Statistik
    public function statistikIndex() {
        $stats = Statistik::all();
        return view('admin.statistik.index', compact('stats'));
    }

    public function statistikUpdate(Request $request, $id) {
        $stat = Statistik::findOrFail($id);
        $stat->update($request->only(['title','count','icon','color_bg','color_text']));
        return redirect()->back()->with('success','Statistik berhasil diupdate');
    }

    // Testimoni
    public function testimoniIndex() {
        $testimonis = Testimoni::all();
        return view('admin.testimoni.index', compact('testimonis'));
    }

    public function testimoniUpdate(Request $request, $id) {
        $testi = Testimoni::findOrFail($id);
        $data = $request->only(['name','role','comment']);
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('testimoni', 'public');
            $data['foto'] = $path;
        }
        $testi->update($data);
        return redirect()->back()->with('success','Testimoni berhasil diupdate');
    }
}
