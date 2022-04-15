<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $genres= Genre::all();
        $books = Book::all();

        // many genres belongs to many books
        $books->each(function ($book) use ($genres) {
            $book->genres()->attach($genres->random(rand(1, count($genres)))->pluck('id')->toArray());
            $book->save();
        }); 

        $borrows = Borrow::all();

        $borrows->each(function ($borrow) use ($books){
            $book = $books->random();
            $borrow->book()->associate($book);
            $borrow->save();
        });
        //dd($users->find(5)->managedRequests);

    }
}
