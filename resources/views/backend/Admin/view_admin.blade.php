@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Admin</h2>
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
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
         <tbody>
            @foreach ($admin as $admin)
                <tr>
                    <th scope="row">{{ $admin->id }}</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->password }}</td>
                    {{-- <td>
                        <form action="{{ route('konsultasi.destroy', $konsultasi->id_konsultasi) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill"></i></button>
                        </form>
                   </td> --}}
                       
                </tr>
            @endforeach
         </tbody>
  </table>
  
{{-- @include('backend.konsultasi.hapus_konsultasi') --}}
@endsection