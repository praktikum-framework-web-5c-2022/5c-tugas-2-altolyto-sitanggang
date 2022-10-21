@extends('layout.master')
<title>@yield ('title',"Dosen")</title>
@section('content')
<h1>Dosen</h1>
<table class="table bg-secondary" style="color: white">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach($dosens as $index => $dosen)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$dosen}}</td>
            <td>{{$nip[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
@endsection