<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    public function accessForLibraran(User $user){
        return $user->is_librarian;
    }

    public function accessForReader(User $user){
        return !$user->is_librarian;
    }

}
