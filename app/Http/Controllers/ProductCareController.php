<?php

namespace App\Http\Controllers;

use App\Models\ProductCare;
use Illuminate\Http\Request;

class ProductCareController extends Controller
{
    public function index()
    {
        $productCares = ProductCare::all();
        return response()->json($productCares);
    }

    public function indexView()
    {
        $productCares = ProductCare::with(['gudang', 'productCareItems.product'])->get();

        return view('product-cares.index', compact('productCares'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'gudang_id' => 'required|integer',
            'customer_name' => 'required|string|max:100',
            'phone_number' => 'required|string|max:13',
            'product_care_date' => 'required|date',
            'total' => 'required|integer',
            'payment_method' => 'required|integer',
            'payment_status' => 'required|integer',
            'product_care_type' => 'required|integer',
            'product_care_status' => 'required|integer',
        ]);

        $productCare = ProductCare::create($validated);
        return response()->json($productCare, 201);
    }

    public function show($id)
    {
        $productCare = ProductCare::findOrFail($id);
        return response()->json($productCare);
    }

    public function update(Request $request, $id)
    {
        $productCare = ProductCare::findOrFail($id);
        $productCare->update($request->all());
        return response()->json($productCare);
    }

    public function destroy($id)
    {
        $productCare = ProductCare::findOrFail($id);
        $productCare->delete();
        return response()->json(null, 204);
    }
}
