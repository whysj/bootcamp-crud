@extends('master')

@section('content')

<div class="ml-3">
    <form action="/ask" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="Enter Judul" id="judul">
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" name="isi" placeholder="Enter Isi" id="isi">
        </div>
        <div class="form-group">
            <label for="tanggal_dibuat">Tanggal Dibuat</label>
            <input type="text" class="form-control"name="tanggal_dibuat" step="1" placeholder="Enter Tanggal" id="tanggal_dibuat">
        </div>
        <div class="form-group">
          <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
          <input type="text" class="form-control" name="tanggal_diperbaharui" step="1" placeholder="Enter Tanggal" id="tanggal_diperbaharui">
        </div>  
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection