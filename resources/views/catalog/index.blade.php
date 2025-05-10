@extends('layouts.app')

@section('page-title', 'Каталог')

@section('main')
    <section class="main__section-catalog section-catalog section py-20">
        <div class="section-catalog__wrapper container mx-auto flex items-center gap-10">
            <div class="catalog__categories flex flex-wrap gap-5">
                @if($categories)
                    @foreach($categories as $category)
                        <div
                            class="catalog-category flex border border-gray max-w-[480px] h-auto gap-5 rounded cursor-pointer hover:shadow hover:shadow-accent transition-all hover:border-accent">
                            <div class="catalog-category__image h-full w-1/2 rounded overflow-hidden">
                                <img src="{{ asset('/storage/images/catalog/' . $category->image) }}"
                                     alt="{{ $category->description }}"
                                     class="object-center object-cover w-full h-full">
                            </div>
                            <div class="catalog-category__description w-1/2 py-2 pr-2 flex flex-col justify-between">
                                <div class="catalog-category__info">
                                    <p class="font-bold text-2xl">{{ $category->name }}</p>
                                    <p class="mt-5 text-pretty">{{ $category->description }}</p>
                                </div>
                                @can('view-resource')
                                <div class="catalog-category__action">
                                    <form action="{{ route('cart.addToCart') }}" method="post" class="">
                                        @csrf
                                        <input type="hidden" name="category" value="{{ $category->id }}">
                                        <button type="submit" class="p-2 bg-accent uppercase text-white rounded cursor-pointer">
                                            Добавить в корзину
                                        </button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Пока что пусто...</p>
                @endif
            </div>
        </div>
    </section>
@endsection
