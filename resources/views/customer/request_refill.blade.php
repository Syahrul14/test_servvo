@extends('layouts.app')

@section('title', 'Pengajuan Refill Produk')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Pengajuan Refill Produk</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('customer.request_refill.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="gudang_id">Lokasi Agen</label>
                    <select name="gudang_id" class="form-control" required>
                        <option value="">Pilih Lokasi</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->location }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="customer_name">Nama Customer</label>
                    <input type="text" name="customer_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon</label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" name="total" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="payment_method">Metode Pembayaran</label>
                    <select name="payment_method" class="form-control" required>
                        <option value="">Pilih Metode</option>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="cash">Tunai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_care_date">Tanggal Refill</label>
                    <input type="date" name="product_care_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="product_care_type">Jenis Refill</label>
                    <select name="product_care_type" class="form-control" required>
                        <option value="1">Pickup</option>
                        <option value="2">Delivery</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan Refill</button>
            </form>
        </div>
    </div>
@endsection