@extends('base')
@section('konten')
<form action="{{route('kategori.update',$kategori->id_kategori)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <h1> Edit Kategori </h1>
        <label>Nama Kategori</label>
        <input type ="text" name="nama" value="{{$kategori->nama}}" class="form-control" placeholder=".....">
    </div>
    <button type="submit" class="btn btn-primary">Simpan </button>
</br>
</br>
@endsection