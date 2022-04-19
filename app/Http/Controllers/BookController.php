<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        if(request('search')){
            $books = Book::searchForBook(request('search'));
            // dd($books);
        }
        return view('book.index',[
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');
        //$this->authorize('accessForLibraran');
        
        if(Auth::user()->is_librarian){
            return view('book.create',[
                'genres' => Genre::all(),
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $this->middleware('auth');
        //$this->authorize('accessForLibraran');
        //dd($request);
        if(Auth::user()->is_librarian){
            $validated_data = $request->validated();
            $book = Book::create($validated_data);
            if (isset($validated_data['genres'])) {
                $book->genres()->attach($validated_data['genres']);
            }
            return redirect()->route('home');
        }else{
            throw AuthenticationException::class;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $books = Book::all();
        $books = $books->filter(function($book){
            return !$this->containsBook($book->id);
        });
        // dd(count($books));
        return view('book.show', [
            'book' => $book,
            'unRentedBooks' => count($books),
        ]);
    }

    private function containsBook($id){
        return Borrow::all()->contains(function ($value, $key) use($id){
            return $value->book_id == $id;
        });

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        
        if(Auth::user()->is_librarian){
            return view('book.edit', [
                'book' => $book,
                'genres' => Genre::all(),
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $this->middleware('auth');
        //$this->authorize('accessForLibraran');
        
        if(Auth::user()->is_librarian){
            $validated_data = $request->validated();
            $book->update($validated_data);
            $book->genres()->sync($request['genres'] ?? []);
            // dd($book->genres);
            return redirect()->route('books.show', [
                'book' => $book,
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $this->middleware('auth');
        // dd($book);
        // $this->authorize('accessForLibraran');
        if(Auth::user()->is_librarian){
            $book->delete();
            return redirect()->route('home');
        }else{
            throw AuthenticationException::class;
        }
    }

}
