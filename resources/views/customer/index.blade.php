@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Customer</h1>

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

    <!-- Button untuk Tambah Customer -->
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Tambah Customer</a>

    <!-- Formulir Pencarian -->
    <form action="{{ route('customer.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari customer..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <!-- Tabel Customer -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($customer as $item)
                <tr>
                    <td>{{ $loop->iteration + ($customer->currentPage() - 1) * $customer->perPage() }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>
                        <a href="{{ route('customer.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('customer.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data customer</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-3">
            @if ($customer->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">« Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $customer->previousPageUrl() }}">« Previous</a>
                </li>
            @endif

            @for ($i = 1; $i <= $customer->lastPage(); $i++)
                @if ($i == $customer->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $customer->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            @if ($customer->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $customer->nextPageUrl() }}">Next »</a>
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
