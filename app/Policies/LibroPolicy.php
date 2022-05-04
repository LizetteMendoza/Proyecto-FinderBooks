<?php

namespace App\Policies;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibroPolicy
{
    use HandlesAuthorization;

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
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Auth\Access\Response|bool
     */

     /*Para ver los libros tiene que pertenecerle al usuario */
    public function view(User $user, Libro $libro)
    {
        return $user->id !== $libro->user_id;
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
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Libro $libro)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Libro $libro)
    {
        //
    }
}
