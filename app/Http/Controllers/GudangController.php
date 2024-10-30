<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return response()->json($gudangs);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string',
        ]);

        $gudang = Gudang::create($validated);
        return response()->json($gudang, 201);
    }

    public function show($id)
    {
        $gudang = Gudang::findOrFail($id);
        return response()->json($gudang);
    }

    public function update(Request $request, $id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->update($request->all());
        return response()->json($gudang);
    }

    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->delete();
        return response()->json(null, 204);
    }
}
