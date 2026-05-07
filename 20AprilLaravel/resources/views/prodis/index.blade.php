@extends('main')
@section('title','Prodi')
    
@section('content')
    


<h1>Data Prodi</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama_prodi</th>
        <th>singkatan</th>
        <th>kaprodi</th>
        <th>Fakultas</th>
    </tr>
    @foreach ($prodis as $key => $prodi)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$prodi->nama_prodi}}</td>
            <td>{{$prodi->singkatan}}</td>
            <td>{{$prodi->kaprodi}}</td>
            <td>{{$prodi->fakultas->nama_fakultas?? '-'}}</td>
        </tr>
    @endforeach
</table>
@endsection
