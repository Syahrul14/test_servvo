@extends('layouts.app')

@section('title', 'Product Cares')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Product Care List</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product Care Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Product</th>
                            <th>Total</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productCares as $care)
                            <tr>
                                <td>{{ $care->id }}</td>
                                <td>{{ $care->customer_name }}</td>
                                <td>
                                    @foreach ($care->productCareItems as $item)
                                        {{ $item->product->name }},
                                    @endforeach
                                </td>
                                <td>{{ $care->total }}</td>
                                <td>{{ $care->product_care_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection