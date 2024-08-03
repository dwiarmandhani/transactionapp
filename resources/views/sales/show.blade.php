@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Transaksi {{ $salesdata->kode }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Bandrol</th>
                <th>Diskon (%)</th>
                <th>Diskon (RP)</th>
                <th>Harga Diskon</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salesdata->details as $detail)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $detail->barang->kode }}</td>
                <td>{{ $detail->barang->nama }}</td>
                <td>{{ $detail->qty }}</td>
                <td>{{ number_format($detail->harga_bandrol, 2) }}</td>
                <td>{{ number_format($detail->diskon_pct, 2) }}</td>
                <td>{{ number_format($detail->diskon_nilai, 2) }}</td>
                <td>{{ number_format($detail->harga_diskon, 2) }}</td>
                <td>{{ number_format($detail->total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
