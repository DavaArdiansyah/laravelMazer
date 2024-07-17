<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Karier Sebelas</title>
    @yield('stylesfirst')
    @vite(['public/assets/scss/app.scss', 'public/assets/scss/themes/dark/app-dark.scss'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png" />
    @yield('styles')
</head>

<body>
    @vite('public/assets/static/js/initTheme.js')
    <div id="app">
        <div id="sidebar">@include('layouts.sidebar')</div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')
            @include('partials.footer')
        </div>
    </div>
    @vite(['public/assets/static/js/components/dark.js', 'public/assets/js/app.js', 'resources/js/perfect-scrollbar.js'])
    @yield('js')
</body>

</html>
