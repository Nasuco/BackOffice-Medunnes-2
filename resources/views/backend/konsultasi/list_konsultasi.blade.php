@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar Konsultasi Pasien</h2>
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
</div>
  
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Pasien</th>
            <th scope="col">ID Dokter</th>
            <th scope="col">Topik</th>
            <th scope="col">Waktu Konsultasi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
         <tbody>
            @foreach ($konsultasi as $konsultasi)
                <tr>
                    <th scope="row">{{ $konsultasi->id_konsultasi }}</th>
                    <td>{{ $konsultasi->pasien_id }}</td>
                    <td>{{ $konsultasi->dokter_id }}</td>
                    <td>{{ $konsultasi->topik }}</td>
                    <td>{{ $konsultasi->created_at }}</td>
                    <td>
                        <form action="{{ route('konsultasi.destroy', $konsultasi->id_konsultasi) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill"></i></button>
                        </form>
                   </td>
                       
                </tr>
            @endforeach
         </tbody>
  </table>
  
{{-- @include('backend.konsultasi.hapus_konsultasi') --}}
@endsection