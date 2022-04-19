<?php

namespace App\Policies;

use App\Models\Borrow;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BorrowPolicy
{
    use HandlesAuthorization;

    public function access(User $user,  Borrow $borrow)
    {
        return $borrow->user->id === $user->id;
    }

    public function accessForLibraran(User $user){
        return $user->is_librarian;
    }
    
}
