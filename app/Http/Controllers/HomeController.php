<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(request('search')){
            $books = Book::searchForBook(request('search'));
            // dd($books);
            return view('book.index',[
                'books' => $books
            ]);
        }
        return view('home', [
            'numberOfUsers' => count(User::all()),
            'numberOfBooks' => count(Book::all()),
            'genres' => Genre::all(),
        ]);
    }
}
