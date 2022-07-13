@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Kategori</h3>
        <form action="{{ url('/kategori/' . $row->id_kategori) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label>NAMA KATEGORI</label>
                    <input type="text" class="form-control" name="kategori_nama" value="{{ $row->kategori_nama }}"></>
                </div>
                <div class="mb-3">
                    <input type="submit" value="UPDATE" class="btn btn-success">
                    <a href="{{ url('kategori/') }}" class="btn btn-secondary">Kembali</a>
                </div>
        </form>
    </div>
@endsection