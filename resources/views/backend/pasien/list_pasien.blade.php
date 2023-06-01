@extends('backend.layouts.app')
@section('content')

<form method="GET" action="">
  @csrf
  <div class="row">
    <div class="col">
      <h2>Daftar Pasien</h2>
    </div>

    {{-- search --}}
    <form action="" method="GET">
      @csrf
        <div class="col">
          {{-- <div class="input-group">
            <div class="form-outline">
              <input type="text" id="name" name="keyword" class="form-control" />
              <label class="form-label" for="search">Search</label>
            </div>
            <button type="submit" class="btn btn-primary" name="search">
              <i class="fas fa-search"></i>
            </button>
          </div> --}}
        </div>
    </form>
  </div>

  <table class="table">
          <thead class="table-info">
            <tr>
              <th scope="col">ID</th>
              <th scope="col"> NIK</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Telepon</th>
              <th scope="col">TB</th>
              <th scope="col">BB</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pasien as $pasien)
                <tr>
                  <th scope="row">{{ $pasien->id_pasien }}</th>
                  <td>{{ $pasien->NIK }}</td>
                  <td>{{ $pasien->nama_pasien }}</td>
                  <td>{{ $pasien->jenis_kelamin }}</td>
                  <td>{{ $pasien->alamat }}</td>
                  <td>{{ $pasien->no_tlp }}</td>
                  <td>{{ $pasien->TB }}</td>
                  <td>{{ $pasien->BB }}</td>
                  <td><span>{{ $pasien->status }}</span></td>
                  <td>
                    {{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ReadPasien">
                      Read
                    </a> --}}
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#BlockPasien">
                      Block
                    </a>
                  </td>
                </tr>
            @endforeach
        </tbody>
  </table>
</form>
@include('backend.pasien.detail_pasien')
@include('backend.pasien.block_pasien')
@include('backend.pasien.unblock_pasien')
@endsection