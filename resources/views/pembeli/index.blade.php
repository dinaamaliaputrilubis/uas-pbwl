@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Pembeli
    <a class="btn btn-primary btn-sm float-end" href="{{ url('pembeli/create') }}">
        Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center">
        <tr class="fw-bold table-active">
            <td>NOMOR</td>
            <td>NAMA PEMBELI</td>
            <td>NOMOR TELEPON</td>
            <td>ALAMAT</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($rows as $row)
        <tr class="fw-semibold">
            <td>{{ $row->id_pembeli }}</td>
            <td>{{ $row->nama_pembeli }}</td>
            <td>{{ $row->no_telp }}</td>
            <td>{{ $row->alamat }}</td>
            <td><a href="{{ url('pembeli/' . $row->id_pembeli . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('pembeli/' . $row->id_pembeli) }}" method="POST">
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