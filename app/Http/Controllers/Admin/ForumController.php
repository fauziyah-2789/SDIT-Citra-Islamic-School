<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    public function index() {
        $forums = Forum::latest()->paginate(10);
        return view('admin.forum.index', compact('forums'));
    }

    public function create() {
        return view('admin.forum.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        Forum::create($request->all());
        return redirect()->route('admin.forum.index')->with('success', 'Topik berhasil dibuat');
    }

    public function edit(Forum $forum) {
        return view('admin.forum.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $forum->update($request->all());
        return redirect()->route('admin.forum.index')->with('success', 'Topik berhasil diupdate');
    }

    public function destroy(Forum $forum) {
        $forum->delete();
        return redirect()->route('admin.forum.index')->with('success', 'Topik berhasil dihapus');
    }
}
