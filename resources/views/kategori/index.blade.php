@extends('layouts.app') 
 
 @section('content') 
 
<div class="container"> 
    <h3>Daftar Kategori
        <a class="btn btn-primary btn-sm float-end" href="{{ url('kategori/create') }}">
            Tambah Data</a>
    </h3>
    <br>
    <table class="table table-bordered table-hover border-dark text-center"> 
        <tr class="fw-bold table-active"> 
            <td>NOMOR</td>
            <td>NAMA KATEGORI</td>
            <td>EDIT</td>
            <td>DELETE</td>  
        </tr> 
    @foreach($rows as $row) 
        <tr class="fw-semibold"> 
        <td>{{ $row->id_kategori }}</td> 
        <td>{{ $row->kategori_nama }}</td> 
        <td><a href="{{ url('kategori/' . $row->id_kategori . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('kategori/' . $row->id_kategori) }}" method="POST">
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