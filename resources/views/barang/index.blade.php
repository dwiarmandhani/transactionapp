@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Barang</h1>

    <!-- Menampilkan Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan Pesan Error -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Button untuk Tambah Barang -->
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    <!-- Form Pencarian -->
    <form action="{{ route('barang.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Cari barang...">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <!-- Tabel Barang -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                <tr>
                    <td>{{ $loop->iteration + $barang->firstItem() - 1 }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ number_format($item->harga, 2) }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            @if ($barang->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">« Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $barang->previousPageUrl() }}">« Previous</a>
                </li>
            @endif

            @for ($page = 1; $page <= $barang->lastPage(); $page++)
                @if ($page == $barang->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $barang->url($page) }}">{{ $page }}</a>
                    </li>
                @endif
            @endfor

            @if ($barang->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $barang->nextPageUrl() }}">Next »</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Next »</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endsection
