<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation Bar di Halaman Beranda-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                {{-- Icon logo di navbar --}}
                <a class="navbar-brand" href="#!">
                        <img src="{{asset('admin/images//icon/logoleebrary.png')}}" alt="leebrary" style="margintop: 10px; width:240px;height:60px;"/>
                    </a>
                </div>
                {{-- Navbar Toggler Button --}}
                    <div class="container" style="padding-left: 0px ; padding-right:60px" >
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav" >
                        <ul class="navbar-nav" >

                        <li class="nav-item">
                            <form action="{{ route ('books.tampil')}}" class="form-inline" method="GET" style="margin-top: 10px">
                                <input type="search" name="search" class="form-control float-right" placeholder="Search book" style="width : 500px ; margin-right : 250px">

                                </form>
                        </li>

                        </ul>
                    </div>

                </div>

                {{-- Navbar Login dan Register --}}
                <div class="container2" style="padding-right: 60px">
                    <ul class="navbar-nav ms-auto" >
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                </div>

        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-7 px-lg-5 my-5" style = "height : 300px">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="margin-top: 150px ; font-size : 70px" >Welcome to Leebrary</h1>
                    <p class=" text-white-50 mb-0" style="margin-top: 30px ; font-size : 20px">Leebrary adalah website perpustakaan dimana
                        pengguna bisa melihat koleksi buku sampai detail buku yang ada pada website ini.
                        Dan admin bisa melakukan aksi menambahkan data buku, mengedit data buku, dan menghapus data buku.</p>
                </div>
            </div>
        </header>
        <!-- List Buku-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">List Buku</h2>
                    <h3 class="section-subheading">List buku yang tersedia di Leebrary</h3>
                </div>

            <div class="row mt-5">
            @foreach ($books as $book)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100 " >
                        <img src="{{ asset('gambarbuku/' . $book->file_path) }}" class="card-img-top"
                            alt="picture" style="height : 600px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->judul }}</h5>
                            <p class="card-text">by {{ $book->penulis }}</p>
                            <a href="/detailbuku/{{ $book->id }}" class="btn btn-dark w-100" >Detail Buku</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

       {{-- Footer --}}
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; 2023 Leebrary Website by Mellafesa. All rights reserved. Template by <a href="https://startbootstrap.com">StartBoostrap</a></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
