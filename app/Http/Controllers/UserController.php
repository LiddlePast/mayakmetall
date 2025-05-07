<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function loginPage(): View
    {
        return view('user.login');
    }

    public function registerPage(): View
    {
        return view('user.register');
    }

    public function loginUser(Request $request): RedirectResponse
    {
        return 1;
    }

    public function registerUser(Request $request): RedirectResponse
    {
        return 1;
    }

    public function logoutUser(Request $request): RedirectResponse
    {
        return 1;
    }
}
