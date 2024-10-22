@extends('layouts.admin')

@section('content')
    <h1>Tambah Gedung</h1>
    <form action="{{ route('buildings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama Gedung</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="images">Upload Gambar</label>
            <input type="file" name="images[]" class="form-control" multiple accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Gedung</button>
    </form>
@endsection
