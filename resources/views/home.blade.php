@extends('layouts.app')

@section('title', 'Beranda - Ramadhan & Lebaran')

@section('content')
<div class="hero">
    <div class="container">
        <h1>🌙 Selamat Datang</h1>
        <p>Catatan kegiatan Ramadhan dan momen Lebaran yang penuh berkah.</p>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Kegiatan Ramadhan</h2>
    <div class="row">
        @foreach($ramadhan as $keg)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $keg['nama'] }}</h5>
                    <p class="card-text">{{ $keg['deskripsi'] }}</p>
                    <a href="{{ route('detail.ramadhan', $keg['id']) }}" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h2 class="text-center mb-4 mt-5">Kegiatan Lebaran</h2>
    <div class="row">
        @foreach($lebaran as $keg)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $keg['nama'] }}</h5>
                    <p class="card-text">{{ $keg['deskripsi'] }}</p>
                    <a href="{{ route('detail.lebaran', $keg['id']) }}" class="btn btn-warning">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection