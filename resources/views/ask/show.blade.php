@extends('master')

@section('content')
<div class="ml-3 mt-3">
        <h3>Pertanyaan</h3>
        <p>Judul : {{$ask->judul}}</p>
        <p> Isi : {{$ask->isi}}</p>
        <p> Jam Dibuat : {{$ask->tanggal_dibuat}}</p>
        <p> Jam Diperbarui : {{$ask->tanggal_diperbaharui}}</p> 

</div>
         
@endsection