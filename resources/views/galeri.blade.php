@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Galeri Momen Ramadhan & Lebaran</h1>
    <div class="row">
        @foreach($galeri as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['judul'] }}">
                <div class="card-body">
                    <p class="card-text text-center">{{ $item['judul'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection