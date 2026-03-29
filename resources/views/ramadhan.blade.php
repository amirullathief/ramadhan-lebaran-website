@extends('layouts.app')

@section('title', 'Kegiatan Ramadhan')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">📖 Kegiatan Selama Ramadhan</h1>
    <div class="row">
        @foreach($kegiatan as $keg)
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
</div>
@endsection