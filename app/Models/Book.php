<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function borrows() {
        return $this->hasMany(Borrow::class, 'book_id');
    }

    public function activeBorrows() {
        return $this->getAllBorrows()->where('status', '=', 'ACCEPTED');
    }

    public static function searchForBook($data)
    {
        return DB::table('books')
                ->where('title', 'like', '%' . $data . '%')
                ->orWhere('author', 'like', '%' . $data . '%')
                ->get();
    }
}
