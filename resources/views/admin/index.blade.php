@extends('layouts.app')

@section('page-title', 'Панель управления')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Панель управления</h2>
        </div>
    </section>
    <section class="main__section-dashboard-actions dashboard-actions section">
        <div class="dashboard-actions__inner max-w-[1400px] mx-auto">
            <p><a href="{{ route('admin.categories') }}" class="hover:text-accent focus-visible:text-accent focus-visible:outline-0 transition-all">Управление категориями услуг</a></p>
            <p><a href="{{ route('admin.categories') }}" class="hover:text-accent focus-visible:text-accent focus-visible:outline-0 transition-all">Управление заказами</a></p>
            <p><a href="{{ route('admin.categories') }}" class="hover:text-accent focus-visible:text-accent focus-visible:outline-0 transition-all">Управление пользователями</a></p>
        </div>
    </section>
@endsection
