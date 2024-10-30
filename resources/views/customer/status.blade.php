@extends('layouts.app')

@section('title', 'Refill Status')

@section('content')
    <h1>Refill Status</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Gudang</th>
                <th>Refill Date</th>
                <th>Status</th>
                <th>Pickup/Delivery</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productCares as $care)
                <tr>
                    <td>{{ $care->product->name }}</td>
                    <td>{{ $care->gudang->name }}</td>
                    <td>{{ $care->product_care_date }}</td>
                    <td>{{ ucfirst($care->product_care_status) }}</td>
                    <td>{{ $care->pickup_at ? 'Pickup' : 'Delivery' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection