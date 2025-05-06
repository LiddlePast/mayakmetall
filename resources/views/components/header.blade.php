<header class="header">
    <div class="header__inner flex items-center justify-between py-10 px-5 container mx-auto">
        <nav class="header__menu menu">
            <ul class="menu__list space-x-5">
                <li class="menu__item inline-block">
                    <a href="{{ route('home') }}" class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black">Главная</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('about') }}" class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black">О компании</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('catalog.index') }}" class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black">Каталог</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('contacts') }}" class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="header__logo logo h-full w-[200px]">
            <img src="{{ asset('/logo.png') }}" alt="Логотип МАЯКМЕТАЛЛ" class="w-full h-full object-contain object-center">
        </div>
        <div class="page-title min-w-[200px] text-end">
            <h1 class="text-xl font-bold text-black">@yield('page-title')</h1>
        </div>
    </div>
</header>
