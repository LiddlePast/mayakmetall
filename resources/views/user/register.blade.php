@extends('layouts.app')

@section('page-title', 'Регистрация')

@section('main')
    <section class="main__section-login section-login section py-10">
        <div class="section-wrapper container mx-auto px-5">
            @if(session('error'))
            <div class="status">
                <p class="text-xl text-red-700">{{ session('error') }}</p>
            </div>
            @endif
            <form action="{{ route('user.register') }}" method="post" class="login-form space-y-5 w-1/2 mx-auto">
                @csrf
                <div class="login-form__field flex flex-col gap-2">
                    <label for="name" class="login-form__label text-xl">Имя</label>
                    <input type="text" class="login-form__input @error('name') border-red-700 @enderror border rounded text-xl p-2 border-gray focus-visible:outline-2 outline-0 outline-transparent focus-visible:outline-offset-2 transition-all focus-visible:border-transparent focus-visible:outline-accent focus-visible:transition-colors" id="name" name="name" required>
                    <span class="text-red-700"><small>@error('name') {{ $message }} @enderror</small></span>
                </div>
                <div class="login-form__field flex flex-col gap-2">
                    <label for="email" class="login-form__label text-xl">Email</label>
                    <input type="email" class="login-form__input @error('email') border-red-700 @enderror border rounded text-xl p-2 border-gray focus-visible:outline-2 outline-0 outline-transparent focus-visible:outline-offset-2 transition-all focus-visible:border-transparent focus-visible:outline-accent focus-visible:transition-colors" id="email" name="email" required>
                    <span class="text-red-700"><small>@error('email') {{ $message }} @enderror</small></span>
                </div>
                <div class="login-form__field flex flex-col gap-2">
                    <label for="password" class="login-form__label text-xl">Пароль</label>
                    <input type="password" class="login-form__input @error('password') border-red-700 @enderror border rounded text-xl p-2 border-gray focus-visible:outline-2 outline-0 outline-transparent focus-visible:outline-offset-2 transition-all focus-visible:border-transparent focus-visible:outline-accent focus-visible:transition-colors" id="password" name="password" required>
                    <span class="text-red-700"><small>@error('password') {{ $message }} @enderror</small></span>
                </div>
                <div class="login-form__field flex flex-col gap-2">
                    <label for="password_confirmation" class="login-form__label text-xl">Повторите пароль</label>
                    <input type="password" class="login-form__input @error('password_confirmation') border-red-700 @enderror border rounded text-xl p-2 border-gray focus-visible:outline-2 outline-0 outline-transparent focus-visible:outline-offset-2 transition-all focus-visible:border-transparent focus-visible:outline-accent focus-visible:transition-colors" id="password_confirmation" name="password_confirmation" required>
                    <span class="text-red-700"><small>@error('password_confirmation') {{ $message }} @enderror</small></span>
                </div>
                <button type="submit" class="login-form__button form-button text-xl text-center border border-gray px-10 py-2 rounded w-full focus-visible:bg-accent transition-all focus-visible:text-white focus-visible:border-transparent focus-visible:outline-0 hover:bg-accent hover:text-white cursor-pointer hover:border-transparent">Вход</button>
                <div class="login-form__links">
                    <p>Есть аккаунт? <a href="{{ route('user.login-page') }}" class="relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-blue-700 focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all focus-visible:after:transition-all focus-visible:after:absolute focus-visible:after:left-0 focus-visible:after:-bottom-2 focus-visible:after:h-1 hover:text-accent focus-visible:after:bg-accent focus-visible:after:w-full focus-visible:after:rounded">Вход</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection
