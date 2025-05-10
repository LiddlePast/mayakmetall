<header class="header">
    <div class="header__inner flex items-center justify-between py-10 px-5 container mx-auto relative">
        <nav class="header__menu menu hidden md:block">
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
        <div class="header__logo logo h-full w-[100px] md:w-[150px]">
            <img src="{{ asset('/logo.png') }}" alt="Логотип МАЯКМЕТАЛЛ"
                 class="w-full h-full object-contain object-center">
        </div>
        <div class="mobile-menu absolute left-0 -top-64 right-0 md:hidden z-20 border transition-all">
            <nav class="header__menu menu bg-white">
                <ul class="menu__list gap-2 flex flex-col p-5 text-center">
                    <li class="menu__item inline-block">
                        <a href="{{ route('main') }}"
                           class="menu__link text-xl block hover:bg-accent hover:text-white">Главная</a>
                    </li>
                    <li class="menu__item inline-block">
                        <a href="{{ route('about') }}"
                           class="menu__link text-xl block hover:bg-accent hover:text-white">О
                            компании</a>
                    </li>
                    <li class="menu__item inline-block">
                        <a href="{{ route('catalog.index') }}"
                           class="menu__link text-xl block hover:bg-accent hover:text-white">Каталог</a>
                    </li>
                    <li class="menu__item inline-block">
                        <a href="{{ route('contacts') }}"
                           class="menu__link text-xl block hover:bg-accent hover:text-white">Контакты</a>
                    </li>
                </ul>
                <div class="mobile-menu__links flex px-10 py-5 gap-20 justify-center">
                    @guest
                        <a href="{{ route('user.login-page') }}" title="Вход в личный кабинет"
                           class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all block">
                            <svg viewBox="0 0 24 24" height="24" width="24">
                                <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24" width="24"></use>
                            </svg>
                        </a>
                    @endguest
                    @auth
                        @can('view-resource')
                            <a href="{{ route('cart.index') }}" title="Корзина"
                               class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all md:block">
                                <svg viewBox="0 0 24 24" height="24" width="24">
                                    <use class="icon" href="{{ asset('/icons.svg#cart') }}" height="24"
                                         width="24"></use>
                                </svg>
                            </a>
                            <a href="{{ route('user.home') }}" title="Перейти в профиль"
                               class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all md:block">
                                <svg viewBox="0 0 24 24" height="24" width="24">
                                    <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24"
                                         width="24"></use>
                                </svg>
                            </a>
                        @endcan
                        @can('view-all')
                            <a href="{{ route('admin.dashboard') }}" title="Перейти в панель управления"
                               class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all md:block">
                                <svg viewBox="0 0 24 24" height="24" width="24">
                                    <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24"
                                         width="24"></use>
                                </svg>
                            </a>
                        @endcan
                        <a href="{{ route('user.logout') }}" title="Выйти из аккаунта"
                           class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all md:block">
                            <svg viewBox="0 0 24 24" height="24" width="24">
                                <use class="icon" href="{{ asset('/icons.svg#logout') }}" width="24" height="24"></use>
                            </svg>
                        </a>
                    @endauth
                </div>
            </nav>
        </div>
        <div class="page-title md:min-w-[200px] text-end pr-5">
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
                @can('view-resource')
                    <a href="{{ route('cart.index') }}" title="Корзина"
                       class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all hidden md:block">
                        <svg viewBox="0 0 24 24" height="24" width="24">
                            <use class="icon" href="{{ asset('/icons.svg#cart') }}" height="24" width="24"></use>
                        </svg>
                    </a>
                    <a href="{{ route('user.home') }}" title="Перейти в профиль"
                       class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all hidden md:block">
                        <svg viewBox="0 0 24 24" height="24" width="24">
                            <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24" width="24"></use>
                        </svg>
                    </a>
                @endcan
                @can('view-all')
                    <a href="{{ route('admin.dashboard') }}" title="Перейти в панель управления"
                       class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all hidden md:block">
                        <svg viewBox="0 0 24 24" height="24" width="24">
                            <use class="icon" href="{{ asset('/icons.svg#profile') }}" height="24" width="24"></use>
                        </svg>
                    </a>
                @endcan
                <a href="{{ route('user.logout') }}" title="Выйти из аккаунта"
                   class="focus-visible:outline-0 focus-visible:text-accent hover:text-accent transition-all hidden md:block">
                    <svg viewBox="0 0 24 24" height="24" width="24">
                        <use class="icon" href="{{ asset('/icons.svg#logout') }}" width="24" height="24"></use>
                    </svg>
                </a>
            @endauth
            <div class="menu-button--closed md:hidden">
                <svg viewBox="0 0 24 24" height="24" width="24" class="cursor-pointer">
                    <use class="icon" href="{{ asset('/icons.svg#menu') }}" width="24" height="24"></use>
                </svg>
            </div>
            <div class="menu-button--opened hidden md:hidden">
                <svg viewBox="0 0 24 24" height="24" width="24" class="cursor-pointer">
                    <use class="icon" href="{{ asset('/icons.svg#cancel') }}" width="24" height="24"></use>
                </svg>
            </div>
        </div>
    </div>
</header>
