@extends('mahasiswas.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-10">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
    </div>

</div>

<div class="row justify-content-end">
    <div class="col-md-4">
        <form action="{{ route('mahasiswas.index') }}" accept-charset="UTF-8" method="get">
            <div class="input-group">
                <input type="text" name="search" id="search" placeholder="Cari" class="form-control">
                <span class="input-group-btn">
                    <input type="submit" value="Cari" class="btn btn-primary">
                </span>
            </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Handphone</th>
        <th>E-mail</th>
        <th>Tanggal Lahir</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>

        <td>{{ $Mahasiswa->Nim }}</td>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td>{{ $Mahasiswa->Kelas }}</td>
        <td>{{ $Mahasiswa->Jurusan }}</td>
        <td>{{ $Mahasiswa->No_Handphone }}</td>
        <td>{{ $Mahasiswa->email }}</td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row justify-content-end">
<div class="col-md-2">
        <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
    </div>
</div>
{{ $mahasiswas -> links('mahasiswas.pagination') }}
@endsection
