@extends('layouts.app')

@section('page-title', 'Корзина')

@section('main')
    <section class="main__section-cart section-cart section py-10">
        <div class="section-cart__wrapper max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Корзина</h2>
            <div class="user-cart mt-10 space-y-2">
                @if(count($cartItems) > 0)
                    @foreach($cartItems as $item)
                        <div class="user-cart__item cart-item border border-gray rounded flex max-h-[400px] h-[150px] w-[380px] gap-5">
                            <div class="cart-item__image h-full w-1/2 rounded overflow-hidden">
                                <img src="{{ asset('/images-catalog/' . $item->category->image . '.png') }}" alt="{{ $item->category->description }}" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="cart-item__data w-1/2 p-2 flex flex-col justify-between items-end text-end">
                                <p>{{ $item->category->name }}</p>
                                <form action="{{ route('cart.removeFromCart') }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="category" value="{{ $item->category->id }}">
                                    <button type="submit" class="cursor-pointer hover:bg-red-700 hover:text-white p-2 rounded transition-colors">
                                        <svg viewBox="0 0 24 24" height="24" width="24">
                                            <use class="icon" href="{{ asset('/icons.svg#trash') }}" height="24" width="24"></use>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Здесь пусто...</p>
                @endif
            </div>
        </div>
    </section>
@endsection
