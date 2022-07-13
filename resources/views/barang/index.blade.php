@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Barang
    <a class="btn btn-primary btn-sm float-end" href="{{ url('barang/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NOMOR</td>
            <td>NAMA BARANG</td>
            <td>HARGA</td>
            <td>STOK</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->id_barang }}</td>
            <td>{{ $row->nama_barang }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->stok }}</td>
            <td><a href="{{ url('barang/' . $row->id_barang . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('barang/' . $row->id_barang) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection