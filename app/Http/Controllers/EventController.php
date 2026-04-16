<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.events');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.events')
            ->with('success', 'Event berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.events.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.events')
            ->with('success', 'Event berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.events')
            ->with('success', 'Event berhasil dihapus');
    }
}