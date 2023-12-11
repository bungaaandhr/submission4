@extends('books.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New File Books</div>
  <div class="card-body">

    <form action="{{ url('book') }}" method="post">
      {!! csrf_field() !!}
      <label>Nama</label></br>
      <input type="text" name="Nama" id="Nama" class="form-control"></br>
      <label>Judul Buku</label></br>
      <input type="text" name="Judul Buku" id="Judul Buku" class="form-control"></br>
      <label></label></br>
      <label>No hp</label></br>
      <input type="text" name="No hp" id="No hp" class="form-control"></br>
      <label>Alamat</label></br>
      <input type="text" name="Alamat" id="Alamat" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
  </form>

</div>
</div>

@stop
