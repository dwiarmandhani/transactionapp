@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>

    <!-- Menampilkan Pesan Error -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode') }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ old('harga') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
