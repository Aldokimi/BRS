<?php

namespace App\Policies;

use App\Models\Borrow;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BorrowPolicy
{
    use HandlesAuthorization;

    // public function accessForLibraran(User $user, Borrow $borrow){
    //     return $user->is_librarian;
    // }

    public function access(User $user, Borrow $borrow){
        return !$user->is_librarian && $borrow->user_id === $user->id;
    }
    
}
