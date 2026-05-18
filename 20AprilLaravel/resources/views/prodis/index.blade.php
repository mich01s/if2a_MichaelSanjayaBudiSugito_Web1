@extends('main')
@section('title','Program Studi')
    
@section('content')
    
<a href="{{route('prodis.create')}}" class="btn btn-primary mb-2">Tambah Prodi</a>


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
        <th>Singkatan Fakultas</th>
        {{-- <th>Aksi</th> --}}
    </tr>
    @foreach ($prodis as $key => $prodi)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$prodi->nama_prodi}}</td>
            <td>{{$prodi->singkatan}}</td>
            <td>{{$prodi->kaprodi}}</td>
            <td>{{$prodi->fakultas->nama_fakultas?? '-'}}</td>
            <td>{{$prodi->fakultas->singkatan?? '-'}}</td>
            {{-- <td><a href="{{route('prodis.edit')}}"></a></td> --}}
        </tr>
    @endforeach
</table>
@endsection
