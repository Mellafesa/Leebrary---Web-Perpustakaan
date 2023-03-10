<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //function halaman index
    public function index(Request $request)
    {
        if($request->has('search')){
            $books = Books::where('judul','LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $books = Books::paginate(5);
        }
        //  var_dump($books);
        return view('admin/books/index', compact('books'));
    }
}
