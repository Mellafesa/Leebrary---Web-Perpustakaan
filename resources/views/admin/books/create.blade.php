@extends('layouts.app')
@section('title','Perpustakaan')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Tambah Data Buku</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('books.store')}}" method="post" class="" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judul" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputpenulis">Penulis</label>
                                                <input type="text" name="penulis" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputpenerbit" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputterbit" class=" form-control-label">Tahun Terbit</label>
                                                <input type="date" name="tahunterbit" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputdeskripsi" class=" form-control-label">Deskripsi</label>
                                                <textarea name="deskripsi" cols ="30" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputfile" class=" form-control-label">Cover  </label>
                                                <input type="file" name="file_path" class="form-control" required id="inputfile">
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary"> Kirim</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
