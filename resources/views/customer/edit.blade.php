@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Customer</h1>

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

    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode', $customer->kode) }}" required>
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $customer->name) }}" required>
        </div>
        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" class="form-control" value="{{ old('telp', $customer->telp) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
