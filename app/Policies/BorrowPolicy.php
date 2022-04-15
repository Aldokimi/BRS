<?php

namespace App\Policies;

use App\Models\Borrow;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BorrowPolicy
{
    use HandlesAuthorization;

    public function accessForLibraran(User $user){
        return $user->is_librarian == 1;
    }
    public function accessForReader(User $user){
        return $user->is_librarian == 0;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Borrow $borrow)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Borrow $borrow)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Borrow $borrow)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Borrow $borrow)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Borrow $borrow)
    {
        //
    }
}
