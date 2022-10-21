@extends('layout.master')
<title>@yield ('title',"Mata Kuliah")</title>
@section('content')
<h1>Mata Kuliah</h1>
<table class="table bg-secondary" style="color: white">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">SKS</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach($matkuls as $index => $matkul)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$matkul}}</td>
            <td>{{$sks[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
@endsection