<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        if(Auth::user()->is_librarian){
            return view('genre.index', [
                'genres' => Genre::all(),
            ]);
        }else{
            throw AuthenticationException::class;
        }
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
            dd("Dd");
            return view('genre.create', [
                'styles'=> ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'],
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreRequest $request)
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        $validated_data = $request->validated();
        // dd($request);
        
        if(Auth::user()->is_librarian){
            Genre::create($validated_data);
            return redirect()->route('genres.index');
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //$this->authorize('accessForLibraran');
        // list by genre
        return view('genre.show', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        
        if(Auth::user()->is_librarian){
            return view('genre.edit', [
                'genre' => $genre,
                'styles'=> ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'],
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        
        if(Auth::user()->is_librarian){
            $validated_data = $request->validated();
        // dd($genre);
            $genre->update($validated_data);
            return redirect()->route('genres.index', [
                'genre' =>$genre,
            ]);
        }else{
            throw AuthenticationException::class;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $this->middleware('auth');
        // $this->authorize('accessForLibraran');
        // dd($genre);
        
        if(Auth::user()->is_librarian){
            $genre->delete();
            return redirect()->route('genres.index');
        }else{
            throw AuthenticationException::class;
        }
    }
}
