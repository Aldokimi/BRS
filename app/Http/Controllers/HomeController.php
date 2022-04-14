<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ListbyGenre(){
        return view('List-by-Genre');
    }

    public function bookDetails(){
        return view('book-details');
    }
    
    public function search(){
        return view('search');
    }
    
    public function myRentals(){
        return view('my-rentals');
    }
    
    public function rentalDetails(){
        return view('rental-details');
    }
    
    public function addBook(){
        return view('add-book');
    }

    public function genreList(){
        return view('genre-list');
    }
    
    public function addGenre(){
        return view('add-genre');
    }

    public function editGenre(){
        return view('edit-genre');
    }
}
