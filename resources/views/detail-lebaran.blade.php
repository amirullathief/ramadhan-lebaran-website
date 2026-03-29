@extends('layouts.app')

@section('title', $kegiatan['nama'])

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h1>{{ $kegiatan['nama'] }}</h1>
                    <p><strong>Tempat:</strong> {{ $kegiatan['tempat'] }}</p>
                    <p><strong>Waktu:</strong> {{ $kegiatan['waktu'] }}</p>
                    <p><strong>Deskripsi Lengkap:</strong></p>
                    <p>{{ $kegiatan['detail'] }}</p>
                    <a href="{{ route('lebaran') }}" class="btn btn-secondary">Kembali ke Daftar Lebaran</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection