<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Gudang;
use App\Models\ProductCare;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function nearbyLocations()
  {
      $locations = Gudang::all();
      return response()->json($locations);
  }

  public function requestRefill(Request $request)
  {
      $validated = $request->validate([
          'gudang_id' => 'required|integer',
          'customer_name' => 'required|string',
          'phone_number' => 'required|string',
          'product_care_date' => 'required|date',
          'product_care_type' => 'required|integer',
      ]);

      $productCare = ProductCare::create($validated);
      return response()->json($productCare, 201);
  }

  public function dashboard()
  {
    //   $productCares = ProductCare::all();
      return view('dashboard');
  }

  public function transactionStatus($id)
  {
    $productCare = ProductCare::with(['productCareItems', 'gudang'])->find($id);
    
    if (!$productCare) {
        return response()->json(['error' => 'Transaction not found'], 404);
    }

    $transactions = ProductCare::where('customer_name', $productCare->customer_name)->get();

    return view('customer.transaction_status', compact('productCare', 'transactions'));
  }

  public function showTransactionStatus($id)
  {
    $productCare = ProductCare::with(['gudang', 'productCareItems.product'])->find($id);
    if (!$productCare) {
        return redirect()->route('customer.request_refill')->with('error', 'Transaction not found.');
    }
    return view('customer.transaction_status', compact('productCare'));
  }

  public function showTransactionList()
    {
        $transactions = ProductCare::all();

        return view('customer.transaction_list', compact('transactions'));
    }

  public function showRequestForm()
  {
      $locations = Gudang::all();
      return view('customer.request_refill', compact('locations'));
  }

  public function submitRequestRefill(Request $request)
  {
    $request->validate([
        'gudang_id' => 'required',
        'customer_name' => 'required',
        'phone_number' => 'required',
        'total' => 'required',
        'payment_method' => 'required',
        'product_care_date' => 'required|date',
        'product_care_type' => 'required',
        
    ]);

    $paymentMethodMapping = [
        'cash' => 1,
        'bank_transfer' => 2,
        'credit_card' => 3,
    ];

    $paymentMethod = $paymentMethodMapping[$request->payment_method] ?? 0;

    $productCare = ProductCare::create([
        'gudang_id' => $request->gudang_id,
        'customer_name' => $request->customer_name,
        'phone_number' => $request->phone_number,
        'total' => $request->total,
        'payment_method' => $paymentMethod,
        'product_care_date' => $request->product_care_date,
        'product_care_type' => $request->product_care_type,
    ]);

    return redirect()->route('customer.transaction-status', ['id' => $productCare->id]);
  }

  public function showLocations()
  {
      $locations = Gudang::all();
      // dd($locations);
      return view('customer.locations', compact('locations'));
  }
}