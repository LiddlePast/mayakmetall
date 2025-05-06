@extends('layouts.app')

@section('page-title', 'О компании')

@section('main')
    <section class="main__section-about-common section-about-common section h-[800px] py-10">
        <div class="section-wrapper container mx-auto px-5">
            <p class="text-xl text-pretty text-justify">Компания МаякМеталл является гарантом успешной реализации
                проекта по созданию или реконструкции проекта,так как несетответственность за обоснованность
                разрабатываемых рекомендаций и предложений, рациональное и эффективное использование материалов и
                финансовых ресурсов, выделенных в рамках договора.</p>
            <div class="section-about-common__image w-full h-full my-5">
                <img src="{{ asset('/storage/about.png') }}" alt="Комплекс"
                     class="w-full h-full object-center object-cover">
            </div>
        </div>
    </section>
    <section class="main__section-about-benefits section-about-benefits section my-10">
        <div class="section-wrapper container mx-auto px-5 flex gap-10">
            <div class="section-about-benefits__text space-y-10 basis-3/4">
                <div class="section-about-benefits__text--first space-y-5">
                    <h2 class="section-about-benefits__heading font-bold text-2xl text-accent">30 лет возраст
                        компании</h2>
                    <p class="text-xl text-pretty text-justify">Компания МаякМеталл уже более 30 лет является
                        производителем и поставщиком строительных металлоконструкций и металлопроката (профнастила,
                        металлочерепицы, стеновых и кровельных сэндвич-панелей).</p>
                </div>
                <div class="section-about-benefits__text--last space-y-5">
                    <h2 class="section-about-benefits__heading font-bold text-2xl text-accent">Топ 10 Российских
                        компаний</h2>
                    <p class="text-xl text-pretty text-justify">Компания МаякМеталл сегодня входит в первую десятку
                        российских производителей, как по объему, так и по ассортименту выпускаемой продукции и имеет
                        большой опыт проектирования, изготовления и монтажа зданий и сооружений различного назначения на
                        основе металлоконструкций.</p>
                </div>
            </div>
            <div class="section-about-benefits__image basis-1/4">
                <img src="{{ asset('/storage/about-hero.webp') }}" alt="О компании - Процесс работы"
                     class="h-full w-full object-cover object-center">
            </div>
        </div>
    </section>
    <section class="main__section-about-certificates section-about-certificates section my-10">
        <div class="section-wrapper container mx-auto px-5 flex flex-wrap justify-evenly">
            <div class="section-about-certificates__certificate w-[250px] h-[300px]">
                <img src="{{ asset('/storage/certificate.jpg') }}" alt="" class="object-center object-contain w-full h-full">
            </div>
            <div class="section-about-certificates__certificate w-[250px] h-[300px]">
                <img src="{{ asset('/storage/evidence.jpg') }}" alt="" class="object-center object-contain w-full h-full">
            </div>
            <div class="section-about-certificates__certificate w-[250px] h-[300px]">
                <img src="{{ asset('/storage/license.jpg') }}" alt="" class="object-center object-contain w-full h-full">
            </div>
        </div>
    </section>
@endsection
