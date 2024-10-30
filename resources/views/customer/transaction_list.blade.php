@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Daftar Transaksi</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Refill</th>
                        <th>Jenis Refill</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->customer_name }}</td>
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
                            <td>
                                <a href="{{ route('customer.transaction-status', ['id' => $transaction->id]) }}" class="btn btn-info btn-sm">
                                    Lihat Status
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection