@extends('layouts.app')

@section('title', 'Jadwal Harian Ramadhan')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Jadwal Kegiatan Harian (Ramadhan)</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwal as $item)
                <tr>
                    <td>{{ $item['waktu'] }}</td>
                    <td>{{ $item['kegiatan'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection