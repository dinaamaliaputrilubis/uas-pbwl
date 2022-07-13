@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pembeli</h3>
        <form action="{{ url('/pembeli/' . $row->id_pembeli) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NAMA PEMBELI</label>
                    <input type="text" class="form-control" name="nama_pembeli" value="{{ $row->nama_pembeli }}"></>
                </div>
                <div class="mb-3">
                    <label>NOMOR TELEPON</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ $row->no_telp }}"></>
                </div>
                <div class="mb-3">
                    <label>ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('pembeli/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection