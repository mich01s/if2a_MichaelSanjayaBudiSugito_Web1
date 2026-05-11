@extends('main')

@section('title','Fakultas')
    


@section('content')
    <a href="{{route('fakultas.create')}}" class="btn btn-primary mb-2"> Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>singkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{$item->nama_fakultas}}</td>
                    <td>{{$item->singkatan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection