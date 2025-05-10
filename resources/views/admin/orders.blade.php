@extends('layouts.app')

@section('page-title', 'Панель управления | Управление заказами')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <div class="links mb-10">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-accent transition-all">< Назад</a>
            </div>
            <h2 class="text-3xl font-bold">Панель управления | Управление заказами</h2>
        </div>
    </section>
    <section class="main__section-dashboard-categories dashboard-categories section pb-10">
        <div class="dashboard-categories__inner max-w-[1400px] mx-auto">
            @if(count($orders) > 0)
                <table class="">
                    <thead>
                    <tr class="border">
                        <th>#</th>
                        <th>Пользователь</th>
                        <th>Дата оформления</th>
                        <th>Статус</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="border p-2">
                            <td class="p-2">{{ $order->id }}</td>
                            <td class="p-2">{{ $order->user->name }}</td>
                            <td class="p-2">{{ $order->order_date }}</td>
                            <td class="p-2">{{ $order->status }}</td>
                            <td class="p-2">
                                <a href="{{ route('admin.show-order', ['order' => $order->id]) }}" class="hover:text-accent transition-colors">Просмотреть</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Список заказов пуст.</p>
            @endif
        </div>
    </section>
@endsection
