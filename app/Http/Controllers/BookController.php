<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Exports\BooksExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //function halaman index untuk menampilkan data buku
    public function index(Request $request)
    {
        //function untuk mencari data buku di halaman admin
        if($request->has('search')){
            $books = Books::where('judul','LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $books = Books::paginate(5);
        }
        //  var_dump($books);
        return view('admin/books/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/books/create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //function untuk menambah & menyimpan data buku
    public function store(Request $request)
    {

        //dd($request->all());
        $books = Books::create($request->all());

        //untuk menyimpan gambar
        if($request->hasFile('file_path')){
            $request->file('file_path')->move('gambarbuku/', $request->file('file_path')->getClientOriginalName());
            $books->file_path = $request->file('file_path')->getClientOriginalName();
        $books->save();
        }
        //perintah kembali ke halaman index setelah menambahkan data
        return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //function untuk mengedit data buku
    public function edit($id)
    {

        $books = Books::findOrFail($id);
        return view('admin.books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        //function untuk mengupdate data buku
    public function update(Request $request, $id)
    {
        $books = Books::findOrFail($id);
        $books->update($request->all());
        if($request->hasFile('file_path')){
            $request->file('file_path')->move('gambarbuku/', $request->file('file_path')->getClientOriginalName());
            $books->file_path = $request->file('file_path')->getClientOriginalName();
        $books->save();
        }
        //perintah kembali ke halaman index setelah selesai update data
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //function untuk menghapus data buku
    public function destroy($id)
    {
        $books = Books::findOrFail($id);
        $books->delete();
        return redirect()->route('books.index');
    }

    //function untuk menampilkan data buku
    public function tampil(Request $request){
        // $books = Books::all();
        // $title = Books::all();
        // return view('index', [
        //     'books' => $books,
        //     'title' => $title,
        // ]);
        if($request->has('search')){
            $title = 'dashboard';
            $books = Books::where('judul','LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $title = 'dashboard';
            $books = Books::paginate(5);
        }
        //  var_dump($books);
        return view('index', compact('books', 'title'));
    }

    //function untuk unduh data ke pdf
    public function unduhpdf(){
        $books = Books::all();
        view()->share('books', $books);
        $pdf = PDF::loadview('admin.books.unduhpdf');
        return $pdf->download('laporan-data-buku.pdf');
    }

    public function export_excel()
	{
		return Excel::download(new BooksExport, 'laporan-data-buku.xlsx');
	}

    //function untuk menampilkan detail buku
    public function detail($id){
        $books = Books::findOrFail($id);
        return view('detail_buku', compact('books'));
    }
}
