@extends('layouts.admin')

@section('content')
    <h1>Edit Gedung</h1>
    <form action="{{ route('buildings.update', $building->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Gedung</label>
            <input type="text" name="name" class="form-control" value="{{ $building->name }}" required>
        </div>

        <div class="form-group">
            <label for="image">Gambar Saat Ini</label><br>
            <img src="{{ asset($building->image) }}" alt="Gambar Gedung"
                style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">
            <br>
            <label for="image">Upload Gambar Baru</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $building->price }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $building->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui Gedung</button>
    </form>
@endsection
