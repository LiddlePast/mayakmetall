<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield('page-title')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="font-roboto">
    <x-header></x-header>
    <main>
        <div class="main__inner">
            @yield('main')
        </div>
    </main>
    <x-footer></x-footer>
</body>
</html>
