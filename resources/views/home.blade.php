@extends('layouts.app')

@section('page-title', 'Главная')

@section('main')
    @if(session('success'))
        <div class="status fixed right-10 bottom-10 p-5 rounded bg-white z-10">
            <p class="text-xl text-green-700">{{ session('success') }}</p>
        </div>
    @endif
    <section
        class="main__section-hero section bg-cover py-50 relative">
        <div
            class="section-bg bg-[url('/public/storage/hero.png')] w-full h-full absolute inset-0 brightness-[0.4] bg-cover bg-no-repeat"></div>
        <div class="section__text max-w-[1200px] mx-auto relative z-10">
            <p class="text-white font-bold text-6xl max-w-[900px] text-pretty">Проектирование и строительство
                быстровозводимых зданий по
                техническому заданию заказчика</p>
            <p class="text-gray mt-10 font-bold text-3xl">Завод с 45 летней историей</p>
        </div>
    </section>
    <section class="main__section-reason section-reason section py-20 max-w-[1200px] mx-auto">
        <div class="section-reason__heading">
            <span class="text-black text-5xl font-bold">Почему выбирают МаякМеталл?</span>
        </div>
        <div class="section-reason__answer mt-10 space-y-2">
            <p class="text-black text-xl">Более 30 лет производим, проектируем и осуществляем монтаж быстровозводимых
                зданий.</p>
            <p class="text-black text-xl">Качественное и эффективное управление проектами на всех этапах реализации с
                оптимальными сроками.</p>
        </div>
    </section>
    <section class="main__section-benefits section-benefits section py-10">
        <div class="section-benefits__benefit flex items-center">
            <div class="benefit__text grow max-w-[50%] p-10">
                <p class="text-xl"><span class="benefit__heading font-bold text-3xl leading-relaxed">Собственное производство.</span><br>Площадью 100 000 квадратных метров по производству легких металлоконструкций и металлопроката методом холодного профилирования</p>
            </div>
            <div class="benefit__image grow max-w-[50%] h-[500px]">
                <img src="{{ asset('/storage/self.webp') }}" alt="Собственное производство" class="object-cover object-center w-full h-full">
            </div>
        </div>
        <div class="section-benefits__benefit flex items-center">
            <div class="benefit__image grow max-w-[50%] h-[500px]">
                <img src="{{ asset('/storage/team.webp') }}" alt="Команда профессионалов" class="object-cover object-center w-full h-full">
            </div>
            <div class="benefit__text grow max-w-[50%] p-10">
                <p class="text-xl"><span class="benefit__heading font-bold text-3xl leading-relaxed">Команда профессионалов.</span><br>Высокий профессионализм наших проектировщиков, технологов, рабочих и строителей – основа успешной реализации вашего проекта</p>
            </div>
        </div>
        <div class="section-benefits__benefit flex items-center">
            <div class="benefit__text grow max-w-[50%] p-10">
                <p class="text-xl"><span class="benefit__heading font-bold text-3xl leading-relaxed">Проверенные проектные решения.</span><br>В зависимости от ваших потребностей мы предложим вам один из типовых проектов, либо спроектируем для вас уникальное здание, полностью подходящее под ваши задачи. Огромный наработанный опыт и использование современных конструкторских и инженерных программных технологий обеспечивают высокий уровень качества проектной документации</p>
            </div>
            <div class="benefit__image grow max-w-[50%] h-[500px]">
                <img src="{{ asset('/storage/done.webp') }}" alt="Готовые проектные решения" class="object-cover object-center w-full h-full">
            </div>
        </div>
    </section>
@endsection
