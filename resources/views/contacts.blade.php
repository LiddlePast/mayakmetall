@extends('layouts.app')

@section('page-title', 'Контакты')

@section('main')
    <section class="main__section-map section-map section hidden md:block xl:h-[800px]">
        <div class="section-map__content w-full h-full">
            <img src="{{ asset('/storage/images/map.png') }}" alt="Карта" class="h-full w-full object-contain xl:object-cover object-center">
        </div>
    </section>
    <section class="main__section-feedback section-feedback section xl:py-20">
        <div class="section-feedback__wrapper max-w-[1200px] mx-auto items-center gap-10 p-5 flex flex-col xl:flex-row">
            <div class="section-feedback__data space-y-5">
                <h2 class="text-black font-bold md:text-3xl mb-5 text-xl">Реквизиты</h2>
                <p class="leading-relaxed text-base md:text-xl">Общество с ограниченной ответственностью<br>КАНСКИЙ ЗАВОД ЛЕГКИХ МЕТАЛЛОКОНСТРУКЦИЙ "МАЯК"<br>ООО
                    КЗЛМК «МАЯК»<br>ИНН 2450014720</p>
                <p class="text-base md:text-xl">663606, Красноярский край, г. Канск, 9 км Тасеевского тракта, дом 1, строение 13.</p>
                <p class="text-base md:text-xl">Приемная: <a href="tel:83916129782" class="hover:text-accent transition-colors">+7 (39161)
                        2-97-82</a>, Email: <a href="mailto:kansk@mayakmetall.ru"
                                               class="hover:text-accent transition-colors">kansk@mayakmetall.ru</a></p>
                <p class="text-base md:text-xl">По вопросам покупки сэндвич-панелей и профлиста:<br><a href="tel:88007700198" class="hover:text-accent transition-colors">+7 (800) 770-0198</a>, Email: <a href="mailto:info@mayakmetall.ru" class="hover:text-accent transition-colors">info@mayakmetall.ru</a></p>
            </div>
            <div class="section-feedback__form feedback-form">
                <form action="#" method="post" class="feedback-form__form-content w-full h-full border border-gray shadow-sm shadow-gray p-5 rounded bg-accent space-y-5">
                    @csrf
                    <div class="feedback-form__field form-field w-full h-full">
                        <label for="message" class="form-field__label font-bold text-2xl">Ваше сообщение:</label>
                        <textarea name="message" id="message" class="form-field__input w-full border p-2 rounded bg-white mt-5 resize-none focus-visible:outline-2 focus-visible:outline-white focus-visible:transition-all h-[300px] border-gray"></textarea>
                    </div>
                    <div class="feedback-form__button w-full h-full">
                        <button type="submit" class="form-button w-full h-full bg-white p-5 rounded cursor-pointer uppercase font-bold tracking-wide hover:bg-black hover:text-white transition-all">Отправить сообщение</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
