@extends('layout.master')
<title>@yield ('title',"Mahasiswa")</title>
@section('content')
<h1>Mahasiswa</h1>
<table class="table bg-secondary" style="color: white">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach($mahasiswas as $index => $mahasiswa)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$mahasiswa}}</td>
            <td>{{$nim[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
@endsection