@extends('layouts.app')

@section('title', 'Request Product Refill')

@section('content')
    <h1>Request Product Refill</h1>

    <form action="{{ route('customer.refill.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Product:</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="gudang_id">Select Nearest Gudang:</label>
            <select name="gudang_id" id="gudang_id" class="form-control">
                @foreach($gudangs as $gudang)
                    <option value="{{ $gudang->id }}">{{ $gudang->name }} - {{ $gudang->location }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="product_care_date">Refill Date:</label>
            <input type="date" name="product_care_date" id="product_care_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pickup">Pickup Option:</label>
            <select name="pickup" id="pickup" class="form-control">
                <option value="1">Pickup from Location</option>
                <option value="0">Deliver to Agent</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit Refill Request</button>
    </form>
@endsection