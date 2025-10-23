<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::orderBy('order')->get();
        return view('admin.programs.index', compact('programs'));
    }

    public function create(){ return view('admin.programs.create'); }

    public function store(Request $request){
        $data = $request->validate([
            'judul'=>'required|string|max:191',
            'deskripsi'=>'nullable|string',
            'ikon'=>'nullable|string',
            'order'=>'nullable|integer'
        ]);
        Program::create($data);
        return redirect()->route('admin.programs.index')->with('success','Program ditambah.');
    }

    public function edit(Program $program){ return view('admin.programs.edit', compact('program')); }

    public function update(Request $request, Program $program){
        $data = $request->validate([
            'judul'=>'required|string|max:191',
            'deskripsi'=>'nullable|string',
            'ikon'=>'nullable|string',
            'order'=>'nullable|integer'
        ]);
        $program->update($data);
        return redirect()->route('admin.programs.index')->with('success','Program diperbarui.');
    }

    public function destroy(Program $program){
        $program->delete();
        return redirect()->route('admin.programs.index')->with('success','Program dihapus.');
    }
}
