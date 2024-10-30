<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCareItem;

class ProductCareItemController extends Controller
{
    public function index()
    {
        $items = ProductCareItem::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'product_care_id' => 'required|integer',
            'serial_number' => 'required|string|max:50',
            'maintenance_count' => 'required|integer',
            'refill_count' => 'required|integer',
            'created_by' => 'required|integer',
        ]);

        $item = ProductCareItem::create($validated);
        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = ProductCareItem::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = ProductCareItem::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = ProductCareItem::findOrFail($id);
        $item->delete();
        return response()->json(null, 204);
    }
}
