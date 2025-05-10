<!doctype html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>МАЯКМЕТАЛЛ | @yield('page-title')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="font-roboto h-full selection:bg-accent">
    <div class="wrapper flex flex-col h-full mx-auto">
        <x-header></x-header>
        <main class="main grow">
            <div class="main__inner">
                @yield('main')
            </div>
        </main>
        <x-footer></x-footer>
    </div>
    <script src="/scripts/header.js"></script>
</body>
</html>
