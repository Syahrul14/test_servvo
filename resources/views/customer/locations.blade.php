@extends('layouts.app')

@section('title', 'Daftar Lokasi Agen')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Daftar Lokasi Agen Refilling</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <ul>
                @foreach ($locations as $location)
                    <li>
                        <strong>{{ $location->location }}</strong><br>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection