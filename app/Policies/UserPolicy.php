<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }

    public function viewPage(User $user): bool
    {
        return Auth::user()->role == 'user';
    }
}
