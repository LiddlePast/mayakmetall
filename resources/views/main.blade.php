@extends('layouts.app')

@section('page-title', 'Главная')

@section('main')
    @if(session('success'))
        <div class="status fixed right-10 bottom-10 p-2 md:p-5 rounded bg-white z-30 border border-green-700">
            <p class="text-base md:text-xl text-green-700">{{ session('success') }}</p>
        </div>
    @endif
    <section
        class="main__section-hero section bg-cover py-30 md:py-50 relative">
        <div
            class="section-bg bg-[url('/public/storage/images/hero.png')] w-full h-full absolute inset-0 brightness-[0.4] bg-cover bg-no-repeat"></div>
        <div class="section__text max-w-[1200px] mx-auto relative z-10">
            <p class="text-white font-bold text-xl sm:text-3xl md:text-5xl xl:text-6xl max-w-[900px] text-pretty px-10">Проектирование и строительство
                быстровозводимых зданий по
                техническому заданию заказчика</p>
            <p class="text-gray mt-10 font-bold text-base sm:text-3xl px-10">Завод с 45 летней историей</p>
        </div>
    </section>
    <section class="main__section-reason section-reason section py-10 md:py-20 px-10 max-w-[1200px] mx-auto">
        <div class="section-reason__heading">
            <span class="text-black text-xl sm:text-3xl md:text-5xl font-bold">Почему выбирают МаякМеталл?</span>
        </div>
        <div class="section-reason__answer mt-10 space-y-2">
            <p class="text-black text-base md:text-xl">Более 30 лет производим, проектируем и осуществляем монтаж быстровозводимых
                зданий.</p>
            <p class="text-black text-base md:text-xl">Качественное и эффективное управление проектами на всех этапах реализации с
                оптимальными сроками.</p>
        </div>
    </section>
    <section class="main__section-benefits section-benefits section py-10">
        <div class="section-benefits__benefit flex items-center flex-col-reverse md:flex-row">
            <div class="benefit__text grow w-full min-h-[200px] md:max-w-[50%] p-10">
                <p class="text-base"><span class="benefit__heading font-bold text-xl sm:text-3xl leading-relaxed">Собственное производство.</span><br>Площадью 100 000 квадратных метров по производству легких металлоконструкций и металлопроката методом холодного профилирования</p>
            </div>
            <div class="benefit__image grow w-full h-[200px] md:max-w-[50%] md:h-[500px]">
                <img src="{{ asset('/storage/images/self.webp') }}" alt="Собственное производство" class="object-cover object-center w-full h-full">
            </div>
        </div>
        <div class="section-benefits__benefit flex items-center flex-col md:flex-row">
            <div class="benefit__image grow w-full h-[200px] md:max-w-[50%] md:h-[500px]">
                <img src="{{ asset('/storage/images/team.webp') }}" alt="Команда профессионалов" class="object-cover object-center w-full h-full">
            </div>
            <div class="benefit__text grow w-full min-h-[200px] md:max-w-[50%] p-10">
                <p class="text-base"><span class="benefit__heading font-bold text-xl sm:text-3xl leading-relaxed">Команда профессионалов.</span><br>Высокий профессионализм наших проектировщиков, технологов, рабочих и строителей – основа успешной реализации вашего проекта</p>
            </div>
        </div>
        <div class="section-benefits__benefit flex items-center flex-col-reverse md:flex-row">
            <div class="benefit__text grow w-full min-h-[200px] md:max-w-[50%] p-10">
                <p class="text-base"><span class="benefit__heading font-bold text-xl sm:text-3xl leading-relaxed">Проверенные проектные решения.</span><br>В зависимости от ваших потребностей мы предложим вам один из типовых проектов, либо спроектируем для вас уникальное здание, полностью подходящее под ваши задачи. Огромный наработанный опыт и использование современных конструкторских и инженерных программных технологий обеспечивают высокий уровень качества проектной документации</p>
            </div>
            <div class="benefit__image grow w-full h-[200px] md:max-w-[50%] md:h-[500px]">
                <img src="{{ asset('/storage/images/done.webp') }}" alt="Готовые проектные решения" class="object-cover object-center w-full h-full">
            </div>
        </div>
    </section>
@endsection
