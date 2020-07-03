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
          <th>Action</th>
        </tr>
      </thead>
    <tbody>
       @foreach($ask as $key => $tanya)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$tanya->judul}}</td>
        <td>{{$tanya->isi}}</td>
        <td>{{$tanya->tanggal_dibuat}}</td>
        <td>{{$tanya->tanggal_diperbaharui}}</td>
        <td>
        <a href="/ask/{{$tanya->id}}" class="btn btn-sm btn-info">show</a>
        <a href="/ask/{{$tanya->id}}/edit" class="btn btn-sm btn-default">edit</a>  
        <form action="/ask/{{$tanya->id}}" method="POST" style="display: inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></button>
        </form>
      </td>
      </tr>  
      @endforeach 
    </tbody>
  </table>

  <div class="ml-3 mt-3">
  
    <a href="/ask/create" class="btn btn-primary">
      Create New Item

    </a>


  </div>

@endsection