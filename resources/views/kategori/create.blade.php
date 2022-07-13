@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Kategori</h3>
    <form action="{{ url('/kategori') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NAMA KATEGORI</label>
            <input type="text" class="form-control"name="kategori_nama">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection
