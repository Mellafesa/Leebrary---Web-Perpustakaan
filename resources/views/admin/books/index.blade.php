@extends('layouts.app')
@section('title', 'Perpustakaan | Data Buku')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1" style="margin-bottom: 20px; margin-top:10px">Data Buku Leebrary
                            <div class="card-tools">
                                <form action="{{ route ('books.index')}}" class="form-inline" method="GET" style="margin-top: 10px">
                                <input type="search" name="search" class="form-control float-right" placeholder="Search" >
                                    <div class="input-group-append">
                                        <button type="submit" class="btn" style="background-color :#343a40">
                                            <i class="fas fa-search" style="size:24px ; color : #ffffff"></i>
                                        </button>
                                    </div>
                                </form>
                        </h2>

                        <div class="col-mr-12">
                            <a href="/books/unduhpdf" class="btn btn-danger" style="margin-top: 50px; margin-left : 450px" action="{{ route ('books.index')}}" >Unduh data buku ke PDF</a>
                        </div>

                        <div class="col-mr-12">
                            <a href="/books/export_excel" class="btn btn-success" style="margin-top: 50px " action="{{ route ('books.index')}}" >Unduh data buku ke Excel</a>
                        </div>
                    </div>

                </div>
                </div>
            </div>

                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Deskripsi</th>
                                        <th>Cover</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $index => $book)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$book->judul}}</td>
                                            <td>{{$book->penulis}}</td>
                                            <td>{{$book->penerbit}}</td>
                                            <td>{{$book->tahunterbit}}</td>
                                            <td>{{$book->deskripsi}}</td>
                                            <td>
                                                <img src="{{ asset('gambarbuku/'.$book->file_path)}}" alt="" style="width:150px;">
                                            </td>
                                            <td nowrap>
                                                <a href="{{route('books.edit', $book->id)}}" style="color:rgb(6, 6, 6)"><i class="fas fa-edit"></i></a> |
                                                <a href="{{route('books.destroy', $book->id)}}" style="color:#DC4C64"><i class="fas fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$books->links()}}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2023 Leebrary Website by Mellafesa. All rights reserved. Template by <a href="https://colorlib.com" >Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
