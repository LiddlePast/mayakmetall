@extends('layouts.app')

@section('page-title', 'Главная')

@section('main')
    <section
        class="main__section-hero section  bg-cover py-50 relative">
        <div class="section-bg bg-[url('/public/storage/hero.png')] w-full h-full absolute inset-0 brightness-[0.4] bg-cover bg-no-repeat"></div>
        <div class="section__text max-w-[1200px] mx-auto relative z-10">
            <p class="text-white font-bold text-6xl max-w-[900px] text-pretty">Проектирование и строительство быстровозводимых зданий по
                техническому заданию заказчика</p>
            <p class="text-gray mt-10 font-bold text-3xl">Завод с 45 летней историей</p>
        </div>
    </section>
    <section class="main__section-slider section"></section>
    <section class="main__section-benefits section"></section>
@endsection
