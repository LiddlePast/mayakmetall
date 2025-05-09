@extends('layouts.app')

@section('page-title', 'Профиль')

@section('main')
    @if(session('success'))
        <div class="status fixed right-10 bottom-10 p-5 rounded bg-white z-10">
            <p class="text-xl text-green-700">{{ session('success') }}</p>
        </div>
    @endif
    <section class="main__section-profile section-profile section py-10">
        <div class="section-profile__wrapper max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Профиль</h2>
            <div class="user-data mt-10 space-y-2">
                <div class="user-data__name">
                    <p><span class="font-bold">Имя:&nbsp;</span>{{ $user->name }}</p>
                </div>
                <div class="user-data__email">
                    <p><span class="font-bold">Email:&nbsp;</span>{{ $user->email }}, {{ $user->role }}</p>
                </div>
                <div class="user-data__created-at">
                    <p><span class="font-bold">Дата создания аккаунта:&nbsp;</span>{{ $user->created_at }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section-orders section-orders section py-10">
        <div class="section-orders__wrapper max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Заказы</h2>
            @if(count($orderItems) > 0)
                <div class="user-orders mt-10 space-y-2">
                    @foreach($orderItems as $item)
                        <div class="order border rounded border-gray p-2 space-y-5">
                            <p class="font-bold text-xl">Заказ #{{ $item[0]->order_id }}</p>
                            <div class="order-items-list flex gap-10">
                                @foreach($item as $orderItem)
                                    <div class="order-item flex gap-2 items-center">
                                        <div class="order-item-image w-[70px] h-[70px] rounded overflow-hidden">
                                            <img
                                                src="{{ asset('/images-catalog/' . $orderItem->category->image . '.png') }}"
                                                alt="{{ $orderItem->category->description }}"
                                                class="w-full h-full object-cover object-center">
                                        </div>
                                        <span>{{ $orderItem->category->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="order-actions flex justify-end items-center gap-8">
                                @if($item[0]->order->status !== 'Отменен')
                                    <form action="{{ route('order.updateOrder') }}" method="post" class="inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="order" value="{{ $item[0]->order_id }}">
                                        <button type="submit" class="p-1 rounded bg-red-500 text-white cursor-pointer">
                                            <svg class="icon inline align-top" viewBox="0 0 24 24" width="24"
                                                 height="24">
                                                <use href="/icons.svg#cancel" width="24" height="24"></use>
                                            </svg>
                                            Отменить
                                        </button>
                                    </form>
                                @endif
                                <p class="text-end text-black">
                                    <span
                                        class="p-1 bg-gray rounded text-white @switch($item[0]->order->status)
                                            @case('Оформлен')
                                                !bg-green-700
                                                @break
                                            @case('В обработке')
                                                !bg-blue-700
                                                @break
                                            @case('Отменен')
                                                !bg-gray
                                                @break
                                            @case('Завершен')
                                                !bg-teal-700
                                                @break
                                            @default
                                                !bg-yellow-700
                                        @endswitch
                                    ">{{ $item[0]->order->status }}</span>
                                    &nbsp;&nbsp;<span
                                        class="p-1 bg-gray rounded text-black">Создан:</span> {{ $item[0]->created_at }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-10">Пока что заказов нет...</p>
            @endif
        </div>
    </section>
@endsection
