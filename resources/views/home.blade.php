@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('SELAMAT DATANG DI SISTEM INFORMASI PENJUALAN TOKO GAS LPG PUTZA') }}
                    <br>
                    {{ __('Menyediakan Segala Jenis Gas Elpiji, Air Mineral Hingga Peralatan Kompor Gas') }}
                    <br>
                    {{ __('Jl Harmonika Baru Gg Flamboyan No 21-A Tj Sari, Medan') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
