<footer class="footer bg-gray-dark">
    <div class="footer__inner flex justify-between items-start py-10 px-5 container mx-auto">
        <div class="footer__left space-y-5">
            <div class="footer__logo logo w-[200px]">
                <img src="{{ asset('/logo.png') }}" alt="Логотип МАЯКМЕТАЛЛ"
                     class="object-center object-contain w-full h-full">
            </div>
            <div class="footer__contacts contacts max-w-[450px]">
                <div class="contacts__address">
                    <p>Адрес: 663606, Красноярский край, город Канск, километр 9 Тасеевского тракта, д.1 строение 13</p>
                </div>
                <div class="contacts__phone">
                    <p>Телефон: <a href="tel:+73916129782"
                                   class="hover:text-accent transition-colors  focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">+73916129782</a>,
                        <a href="tel:+73912883315"
                           class="hover:text-accent transition-colors  focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">+73912883315</a>
                    </p>
                </div>
                <div class="contacts__mail">
                    <p>Эл. почта: <a href="mailto:kzlmk2004@mail.ru"
                                     class="hover:text-accent transition-colors  focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">kzlmk2004@mail.ru</a>,
                        <a href="mailto:3125@mayakmetall.ru"
                           class="hover:text-accent transition-colors  focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">3125@mayakmetall.ru</a>
                    </p>
                </div>
                <div class="contacts__cite">
                    <p>Сайт: <a href="https://mk.mayakmetall.ru" target="_blank"
                                class="hover:text-accent transition-colors  focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">mk.mayakmetall.ru</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer__right">
            <nav class="footer__menu menu">
                <ul class="menu__list flex flex-col gap-2">
                    <li class="menu__item">
                        <a href="{{ route('home') }}"
                           class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">Главная</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('about') }}"
                           class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">О
                            компании</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('catalog.index') }}"
                           class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">Каталог</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('contacts') }}"
                           class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
