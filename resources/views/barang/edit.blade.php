@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Barang</h3>
        <form action="{{ url('/barang/' . $row->id_barang) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NAMA BARANG</label>
                    <input type="text" class="form-control" name="nama_barang" value="{{ $row->nama_barang }}"></>
                </div>
                <div class="mb-3">
                    <label>HARGA</label>
                    <input type="text" class="form-control" name="harga" value="{{ $row->harga }}"></>
                </div>
                <div class="mb-3">
                    <label>STOK</label>
                    <input type="text" class="form-control" name="stok" value="{{ $row->stok }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('barang/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection