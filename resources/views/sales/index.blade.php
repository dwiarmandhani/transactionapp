@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Transaksi</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('sales.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ $search }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal</th>
                    <th>Customer</th>
                    <th>Subtotal</th>
                    <th>Diskon</th>
                    <th>Ongkir</th>
                    <th>Total Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $grandTotal = 0;
                @endphp

                @foreach($sales as $sale)
                <tr>
                    <td>{{ $loop->iteration + ($page - 1) * $perPage }}</td>
                    <td>{{ $sale->kode }}</td>
                    <td>{{ $sale->tgl }}</td>
                    <td>{{ $sale->customer->name }}</td>
                    <td>{{ number_format($sale->subtotal, 2) }}</td>
                    <td>{{ number_format($sale->diskon, 2) }}</td>
                    <td>{{ number_format($sale->ongkir, 2) }}</td>
                    <td>{{ number_format($sale->total_bayar, 2) }}</td>
                    <td>
                        <a href="{{ route('sales.show', $sale) }}" class="btn btn-primary btn-sm">Detail</a>
                        {{-- <a href="{{ route('sales.edit', $sale) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                        {{-- <form action="{{ route('sales.destroy', $sale) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                        </form> --}}
                    </td>
                </tr>

                @php
                    $grandTotal += $sale->total_bayar;
                @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" class="text-end font-weight-bold">Grand Total</td>
                    <td class="font-weight-bold">{{ number_format($grandTotal, 2) }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="pagination d-flex justify-content-between">
        @if ($page > 1)
            <a href="{{ route('sales.index', ['search' => $search, 'page' => $page - 1]) }}" class="btn btn-secondary">« Previous</a>
        @else
            <span class="btn btn-secondary disabled">« Previous</span>
        @endif

        <div>
            @for ($i = 1; $i <= $totalPages; $i++)
                @if ($i == $page)
                    <span class="btn btn-primary">{{ $i }}</span>
                @else
                    <a href="{{ route('sales.index', ['search' => $search, 'page' => $i]) }}" class="btn btn-light">{{ $i }}</a>
                @endif
            @endfor
        </div>

        @if ($page < $totalPages)
            <a href="{{ route('sales.index', ['search' => $search, 'page' => $page + 1]) }}" class="btn btn-secondary">Next »</a>
        @else
            <span class="btn btn-secondary disabled">Next »</span>
        @endif
    </div>
</div>
@endsection
