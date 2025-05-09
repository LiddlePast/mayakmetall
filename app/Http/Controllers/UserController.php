<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function home(): View
    {
        $user = Auth::user();
        return view('user.home', compact('user'));
    }

    public function loginPage(): View
    {
        return view('user.login');
    }

    public function registerPage(): View
    {
        return view('user.register');
    }

    public function loginUser(LoginRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $userEmail = $validated['email'];
        $userPassword = $validated['password'];
        if (Auth::attempt(['email' => $userEmail, 'password' => $userPassword])) {
            $request->session()->regenerate();
            return to_route('main')->with('success', 'Добро пожаловать');
        }
        return to_route('user.login-page')->with('error', 'Неверный логин или пароль')->withInput();
    }

    public function registerUser(RegisterRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $userName = $validated['name'];
        $userEmail = $validated['email'];
        $userPassword = $validated['password'];
        User::create([
           'name' => $userName,
           'email' => $userEmail,
           'password' => Hash::make($userPassword),
        ]);
        Cart::create([
            'user_id' => Auth::id(),
        ]);
        if (Auth::attempt(['email' => $userEmail, 'password' => $userPassword])) {
            return to_route('main')->with('success', 'Регистрация прошла успешно');
        }
        return to_route('user.register-page')->with('error', 'Ошибка при регистрации')->withInput();
    }

    public function logoutUser(Request $request): RedirectResponse
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return to_route('user.login-page');
        }
        return to_route('user.login-page');
    }
}
