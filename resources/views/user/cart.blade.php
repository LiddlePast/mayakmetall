@extends('layouts.app')

@section('page-title', 'Корзина')

@section('main')
    <section class="main__section-cart section-cart section py-10">
        <div class="section-cart__wrapper max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Корзина</h2>
            <div class="user-cart mt-10 flex justify-between items-start">
                @if(count($cartItems) > 0)
                    <div class="user-cart__list space-y-2">
                        @foreach($cartItems as $item)
                            <div
                                class="user-cart__item cart-item border border-gray rounded flex max-h-[400px] h-[150px] w-[380px] gap-5">
                                <div class="cart-item__image h-full w-1/2 rounded overflow-hidden">
                                    <img src="{{ asset('/images-catalog/' . $item->category->image . '.png') }}"
                                         alt="{{ $item->category->description }}"
                                         class="h-full w-full object-cover object-center">
                                </div>
                                <div class="cart-item__data w-1/2 p-2 flex flex-col justify-between items-end text-end">
                                    <p>{{ $item->category->name }}</p>
                                    <form action="{{ route('cart.removeFromCart') }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="category" value="{{ $item->category->id }}">
                                        <button type="submit"
                                                class="cursor-pointer hover:bg-red-700 hover:text-white p-2 rounded transition-colors">
                                            <svg viewBox="0 0 24 24" height="24" width="24">
                                                <use class="icon" href="{{ asset('/icons.svg#trash') }}" height="24"
                                                     width="24"></use>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="user-cart__order">
                        <div class="user-cart__order-list border p-5 rounded border-gray">
                            <div class="user-cart__order-title mb-5 border-b-2 pb-5 text-end">
                                <span class="text-3xl font-bold">Заказ</span>
                            </div>
                            <div class="user-cart__order-list-items font-mono mb-5 text-start"></div>
                            <form action="{{ route('order.createOrder') }}" method="post" class="w-full mt-5 border-t-2 pt-5">
                                @csrf
                                <div class="order-items"></div>
                                <button type="submit" class="w-full p-2 border rounded cursor-pointer hover:bg-accent hover:border-transparent hover:outline-2 hover:outline-offset-2 hover:outline-accent transition-all">Оформить заказ</button>
                            </form>
                        </div>
                        <script src="/scripts/order.js"></script>
                    </div>
                @else
                    <p>Здесь пусто...</p>
                @endif
            </div>
        </div>
    </section>
@endsection
