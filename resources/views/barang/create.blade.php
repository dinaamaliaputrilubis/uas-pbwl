@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Barang</h3>
        <form action="{{ url('/barang') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA BARANG</label>
                <input type="text" class="form-control" name="nama_barang">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <label>STOK</label>
                <input type="text" class="form-control" name="stok">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('barang/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection