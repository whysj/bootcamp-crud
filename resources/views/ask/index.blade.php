@extends('master')

@section('content')
<table class="table table-bordered">
    
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diperbaharui</th>
        </tr>
      </thead>
    <tbody>
       @foreach ($ask as $key => $tanya)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$tanya->judul}}</td>
        <td>{{$tanya->isi}}</td>
        <td>{{$tanya->tanggal_dibuat}}</td>
        <td>{{$tanya->tanggal_diperbaharui}}</td>
      </tr>  
      @endforeach 
    </tbody>
  </table>

@endsection