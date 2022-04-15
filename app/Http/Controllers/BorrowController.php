<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($this->authorize('accessForReader')){
            return view('rental.my-rentals',[
                'rentals' => Borrow::all(),
            ]);
        }else{
            $this->authorize('accessForLibraran');
            return view('rental.rentals-list',[
                'rentals' => Borrow::all(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowRequest $request, Book $book)
    {
        $this->authorize('accessForReader');
        Borrow::create();
        return redirect()->route('book.book-details', [
            'book' => $book,
            'user' => Auth::user(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        $this->authorize('accessForReader');
        return redirect()->route('rental.rental-details', [
            'rental' => $borrow,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        $this->authorize('accessForLibraran');
        return view('rental.edit-book', [
            'rental' => $borrow,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowRequest  $request
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBorrowRequest $request, Borrow $borrow)
    {
        $this->authorize('accessForLibraran');
        $validated_data = $request->validated();
        $borrow->update($validated_data);
        return redirect()->route('borrow.rentals-list', [
            'borrow' => $borrow,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
