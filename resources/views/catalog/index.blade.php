@extends('layouts.app')

@section('page-title', 'Каталог')

@section('main')
    <section class="main__section-catalog section-catalog section py-20 px-5">
        <div class="section-catalog__wrapper container mx-auto flex items-center gap-10">
            <div class="catalog__categories flex flex-wrap gap-5">
                @if($categories)
                    @foreach($categories as $category)
                        <div
                            class="catalog-category flex border border-gray max-w-[480px] md:w-[370px] xl:w-[480px] h-auto gap-5 rounded cursor-pointer hover:shadow hover:shadow-accent transition-all hover:border-accent flex-col sm:flex-row">
                            <div class="catalog-category__image h-full w-full max-h-[250px] md:w-1/2 md:max-h-none rounded overflow-hidden">
                                <img src="{{ asset('/storage/images/catalog/' . $category->image) }}"
                                     alt="{{ $category->description }}"
                                     class="object-center object-cover w-full h-full">
                            </div>
                            <div class="catalog-category__description w-full sm:w-1/2 py-2 px-2 md:pr-2 flex flex-col justify-between">
                                <div class="catalog-category__info">
                                    <p class="font-bold text-2xl w-full text-wrap break-all">{{ $category->name }}</p>
                                    <p class="mt-5 text-pretty">{{ $category->description }}</p>
                                </div>
                                @can('view-resource')
                                <div class="catalog-category__action mt-2 w-full">
                                    <form action="{{ route('cart.addToCart') }}" method="post" class="">
                                        @csrf
                                        <input type="hidden" name="category" value="{{ $category->id }}">
                                        <button type="submit" class="p-2 w-full bg-accent uppercase text-white rounded cursor-pointer">
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
