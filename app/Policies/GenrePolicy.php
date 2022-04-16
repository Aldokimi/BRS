<?php

namespace App\Policies;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GenrePolicy
{
    use HandlesAuthorization;

    public function accessForLibraran(User $user){
        return $user->is_librarian;
    }

    public function accessForReader(User $user){
        return !$user->is_librarian;
    }
    
}
