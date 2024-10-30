@extends('layouts.app')

@section('title', 'Status Transaksi')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Status Transaksi</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5>Detail Transaksi</h5>
            <p><strong>ID:</strong> {{ $productCare->id }}</p>
            <p><strong>Nama Customer:</strong> {{ $productCare->customer_name }}</p>
            <p><strong>Tanggal Refill:</strong> {{ $productCare->product_care_date }}</p>
            <p><strong>Jenis Refill:</strong> {{ $productCare->product_care_type == 1 ? 'Pickup' : 'Delivery' }}</p>
            <p><strong>Status:</strong> 
                @if ($productCare->product_care_status == 1)
                    Menunggu Konfirmasi
                @elseif ($productCare->product_care_status == 2)
                    Diproses
                @else
                    Selesai
                @endif
            </p>

            <hr>
            <h5>Daftar Transaksi</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Customer</th>
                        <th>Total</th>
                        <th>Metode Pembayaran</th>
                        <th>Tanggal Refill</th>
                        <th>Jenis Refill</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->customer_name }}</td>
                            <td>{{ $transaction->total }}</td>
                            <td>
                                @if ($transaction->payment_method == 1)
                                    Tunai
                                @elseif ($transaction->payment_method == 2)
                                    Transfer Bank
                                @elseif ($transaction->payment_method == 3)
                                    Kartu Kredit
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $transaction->product_care_date }}</td>
                            <td>{{ $transaction->product_care_type == 1 ? 'Pickup' : 'Delivery' }}</td>
                            <td>
                                @if ($transaction->product_care_status == 1)
                                    Menunggu Konfirmasi
                                @elseif ($transaction->product_care_status == 2)
                                    Diproses
                                @else
                                    Selesai
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection