@extends('master')



@section('content')
<table class="table table-bordered">
    
      <thead>
        <tr>
          <th>No</th>
          <th>Isi</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diperbaharui</th>
        </tr>
      </thead>
    <tbody>
       @foreach($answer as $key => $jawab)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$jawab->isi}}</td>
        <td>{{$jawab->tanggal_dibuat}}</td>
        <td>{{$jawab->tanggal_diperbaharui}}</td>
      </tr>  
      @endforeach 
    </tbody>
  </table>


@endsection
