@extends('layouts.app')

@section('page-title', 'Профиль')

@section('main')
    <section class="main__section-profile section-profile section py-10">
        <div class="section-profile__wrapper max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Профиль</h2>
            <div class="user-data mt-10 space-y-2">
                <div class="user-data__name">
                    <p><span class="font-bold">Имя:&nbsp;</span>{{ $user->name }}</p>
                </div>
                <div class="user-data__email">
                    <p><span class="font-bold">Email:&nbsp;</span>{{ $user->email }}</p>
                </div>
                <div class="user-data__created-at">
                    <p><span class="font-bold">Дата создания аккаунта:&nbsp;</span>{{ $user->created_at }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
