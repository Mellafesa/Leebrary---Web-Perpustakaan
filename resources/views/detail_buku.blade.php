@extends('layout_user.navbar')
@section('content')

<section class="py-5">
    <div class="text ">
        <h1 class="text-center" style="margin-top: 10px ; font-size : 40px; " >Detail Buku</h1>
    <div class="container px-4 px-lg-5 my-5">
        {{-- supaya konten nya berada di tengah --}}
        <div class="row gx-4 gx-lg-5 align-items-center">
            {{-- function card gambar --}}
            <div class="col-md-6 ">
                <img class="card-img-top mb-5 mb-md-0" src="{{ asset('gambarbuku/'.$books->file_path)}}" alt="" style="width: 100%;">
            </div>
            <div class="col-md-6">
                     <div class="card-body text-secondary">
                     <h1 class="card-title">{{$books->judul}}</h2>
                     <h7 class="card-text">Penulis : {{$books->penulis}}</h7>
                     <br>
                     <h7 class="card-text">Penerbit : {{$books->penerbit}}</h7>
                     <br>
                     <h7 class="card-text">Tahun terbit : {{$books->tahunterbit}}</h7>
                     <br>
                     <h7 class="card-text">Deskripsi : {{$books->deskripsi}}</h7>
                     <br>
                     <a class="btn btn-dark mt-4" href="/">Kembali</a>
              </div>
       </div>
</div>



@endsection('content')
