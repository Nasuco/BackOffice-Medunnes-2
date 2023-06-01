@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar Spesialisasi Dokter</h2>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#CreateSpesialisasi">
            Tambah Spesialisasi
        </button>
    </div>
</div>

<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Spesialis</th>
            <th scope="col">Img Spesialisasi</th>
        </tr>
    </thead>
         <tbody>
            @foreach ($spesialis as $spesialis)
                <tr>
                    <th scope="row">{{ $spesialis->id_spesialis }}</th>
                    <td>{{ $spesialis->nama_spesialis }}</td>
                    <td>{{ $spesialis->img_spesialis }}</td>
                </tr>
            @endforeach
         </tbody>
  </table>
  
@include('backend.spesialis.create_spesialis')
@endsection