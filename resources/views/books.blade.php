@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Form Tambah Data Buku</h2>
</div>

<form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inputjudul">Judul Buku</label>
    <input type="text" name="judul" class="form-control" id="inputjudul" placeholder="Masukkan Judul Buku">
    </div>
    <div class="mb-3">
        <label for="inputpenulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" id="inputpenulis" placeholder="Masukkan Nama Penulis">
    </div>
    <div class="mb-3">
        <label for="inputpenerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" id="inputpenerbit" placeholder="Masukkan Penerbit" >
    </div>
    <div class="mb-3">
        <label for="inputterbit">Tahun Terbit</label>
        <input type="date" name="tahunterbit" class="form-control" id="inputterbit" >
    </div>

    <div>
        <!-- Add CSRF Token -->
        {{-- @csrf --}}

    <div class="form-group">
        <label for="inputfile">Gambar Buku</label>
        <input type="file" name="file_path" required id="inputfile">
    </div>

    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>

</form>
    @endsection
