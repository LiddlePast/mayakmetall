<header class="header">
    <div class="header__inner flex items-center justify-between py-10 px-5 container mx-auto">
        <nav class="header__menu menu">
            <ul class="menu__list space-x-5">
                <li class="menu__item inline-block">
                    <a href="{{ route('main') }}"
                       class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all focus-visible:after:transition-all focus-visible:after:absolute focus-visible:after:left-0 focus-visible:after:-bottom-2 focus-visible:after:h-1 focus-visible:after:bg-accent focus-visible:after:w-full focus-visible:after:rounded">Главная</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('about') }}"
                       class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all focus-visible:after:transition-all focus-visible:after:absolute focus-visible:after:left-0 focus-visible:after:-bottom-2 focus-visible:after:h-1 focus-visible:after:bg-accent focus-visible:after:w-full focus-visible:after:rounded">О
                        компании</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('catalog.index') }}"
                       class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all focus-visible:after:transition-all focus-visible:after:absolute focus-visible:after:left-0 focus-visible:after:-bottom-2 focus-visible:after:h-1 focus-visible:after:bg-accent focus-visible:after:w-full focus-visible:after:rounded">Каталог</a>
                </li>
                <li class="menu__item inline-block">
                    <a href="{{ route('contacts') }}"
                       class="menu__link relative after:transition-all after:absolute after:left-0 after:-bottom-2 after:w-0 after:h-1 after:bg-accent hover:after:w-full after:rounded text-xl text-black focus-visible:outline-0 focus-visible:text-accent focus-visible:transition-all focus-visible:after:transition-all focus-visible:after:absolute focus-visible:after:left-0 focus-visible:after:-bottom-2 focus-visible:after:h-1 focus-visible:after:bg-accent focus-visible:after:w-full focus-visible:after:rounded">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="header__logo logo h-full w-[200px]">
            <img src="{{ asset('/logo.png') }}" alt="Логотип МАЯКМЕТАЛЛ"
                 class="w-full h-full object-contain object-center">
        </div>
        <div class="page-title min-w-[200px] text-end">
            <h1 class="text-xl font-bold text-black">@yield('page-title')</h1>
        </div>
        <div class="header__icons flex gap-5">
            @guest
                <a href="{{ route('user.login-page') }}" title="Вход в личный кабинет"
                   class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all block">
                    <svg viewBox="0 0 24 24" height="24" width="24">
                        <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24" width="24"></use>
                    </svg>
                </a>
            @endguest
            @auth
                <a href="{{ route('cart.index') }}" title="Корзина"
                   class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all block">
                    <svg viewBox="0 0 24 24" height="24" width="24">
                        <use class="icon" href="{{ asset('/icons.svg#cart') }}" height="24" width="24"></use>
                    </svg>
                </a>
                <a href="{{ route('user.home') }}" title="Перейти в профиль"
                   class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all block">
                    <svg viewBox="0 0 24 24" height="24" width="24">
                        <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24" width="24"></use>
                    </svg>
                </a>
                <a href="{{ route('user.logout') }}" title="Выйти из аккаунта"
                   class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all block">
                    <svg viewBox="0 0 24 24" height="24" width="24">
                        <use class="icon" href="{{ asset('/icons.svg#logout') }}" width="24" height="24"></use>
                    </svg>
                </a>
            @endauth
        </div>
    </div>
</header>
