@extends('Layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Pembeli</h3>
        <form action="{{ url('/pembeli') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA PEMBELI</label>
                <input type="text" class="form-control" name="nama_pembeli">
            </div>
            <div class="mb-3">
                <label>NOMOR TELEPON</label>
                <input type="text" class="form-control" name="no_telp">
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-success">
                <a href="{{ url('pembeli/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
</div>
@endsection