@extends('backend.layouts.app')
@section('content')

  <div class="row">
    <div class="col">
      <h2>Daftar Dokter</h2>
    </div>
    <div class="col">
      {{-- <div class="input-group">
        <div class="form-outline">
          <input type="search" id="form1" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div> --}}
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#CreateDokter">
            Tambah Dokter
        </button>
    </div>
  </div>

  <table class="table">
          <thead class="table-info">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">ID Spesialisasi</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dokter as $dokter)
                <tr>
                  <th scope="row">{{ $dokter->id_dokter }}</th>
                  <td>{{ $dokter->nama_dokter }}</td>
                  <td>{{ $dokter->spesialis_id }}</td>
                  <td><span>{{ $dokter->status }}</span></td>
                  <td>
                    <form action="{{ route('dokter.destroy', $dokter->id_dokter) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Dokter" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill"></i></button>
                  </form>
                  </td>
                </tr>
            @endforeach
        </tbody>
  </table>

@include('backend.dokter.create_dokter')
@endsection