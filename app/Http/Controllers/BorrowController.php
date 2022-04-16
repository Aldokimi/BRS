<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
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
        if(!Auth::user()->is_librarian){
            return view('rental.index',[
                'rentals' => Borrow::all()->filter(function($borrow){
                    return $borrow->user->id == Auth::user()->id;
                }),
            ]);
        }
        return view('rental.index',[
            'rentals' => Borrow::all(),
        ]);
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
    public function store(StoreBorrowRequest $request)
    {
        Borrow::create([
            'user_id' => Auth::user()->id,
            'book_id' => $request['book'],
            'status' => 'PENDING',
        ]);
        $book = Book::all()->find($request['book']);
        // dd($book);
        return redirect()->route('books.show', ['book' => $book, 'rented' =>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow  $rental)
    {
        return view('rental.show', [
            'rental' => $rental,
            'users'  => User::all(),
            'statusList' => ['PENDING', 'ACCEPTED', 'REJECTED', 'RETURNED'],
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
        return view('rental.edit', [
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
    public function update(UpdateBorrowRequest $request)
    {
        $validated_data = $request->validated();
        // dd();
        $rental = Borrow::all()->find($request['rental']);
        $rental->update($validated_data);
        // dd($rental);
        return redirect()->route('rentals.show', [
            'rental' => $rental,
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
        dd($borrow);
        $borrow->delete();
        return redirect()->route('rental.index');
    }
}
