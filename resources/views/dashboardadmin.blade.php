@extends('layouts.adminbook')

@section('content-header')
    <h1 class="m-0">Dashboard Admin</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="m-0">Featured</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title">Special title treatment</h6>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('buildings.create') }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <div class="gedung-grid">
    </div>



    <style>
        /* Grid layout untuk kartu produk dengan jarak antar kartu */
        .gedung-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 30px;
            /* Menambah jarak antar kartu produk */
            padding: 20px;
        }

        /* Kartu produk */
        .gedung-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            text-align: center;
        }

        /* Hover effect untuk kartu produk */
        .gedung-card:hover {
            transform: translateY(-5px);
        }

        /* Gambar produk */
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Info produk */
        .product-info {
            padding: 15px;
        }

        .nama-gedung {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .harga-gedung {
            font-size: 14px;
            color: #f56c6c;
            margin-bottom: 15px;
        }

        .detail-button {
            background-color: #f56c6c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .detail-button:hover {
            background-color: #e64545;
        }
    </style>
@endsection
