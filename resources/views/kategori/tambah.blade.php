@extends('base')
@section('konten')
<form action="{{route('kategori.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <h1>Tambah Kategori</h1>
    <label>Nama Kategori</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection