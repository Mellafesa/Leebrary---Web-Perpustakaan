<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Beranda"
//     ]);
// });

//route untuk menampilkan halaman index
Route::get('/', [BookController::class, 'tampil'])->name('books.tampil');

//route untuk menampilkan detail buku
Route::get('/detailbuku/{id}', [BookController::class, 'detail'])->name('detail');

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Mellafesa Rofida",
        "email" => "mellafesarofida@gmail.com",
        "gambar" => "photo raport mella.png"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

// Route::resource('/books', BookController::class);

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/books/index', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
    //unduh data ke pdf
    Route::get('/books/unduhpdf', [BookController::class, 'unduhpdf'])->name('books.unduhpdf');
    Route::get('/books', 'BookController@index');
    Route::get('/books/export_excel', [BookController::class, 'export_excel'])->name('books.export_excel');
});


