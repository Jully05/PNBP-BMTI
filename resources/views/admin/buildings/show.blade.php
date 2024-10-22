@extends('layouts.admin')

@section('content')
    <h1>Detail Gedung: {{ $building->name }}</h1>

    <h3>Gambar</h3>
    @if ($building->images)
        @foreach (json_decode($building->images) as $image)
            <img src="{{ asset($image) }}" alt="Gambar Gedung" style="max-width: 200px; max-height: 200px; margin: 10px;">
        @endforeach
    @endif

    <h3>Harga: Rp {{ number_format($building->price, 2) }}</h3>
    <p>Nama: {{ $building->name }}</p>
    <p>Deskripsi : {{ $building->description }}</p>
@endsection
