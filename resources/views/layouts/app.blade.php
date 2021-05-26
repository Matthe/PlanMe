<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="fixed-bottom">
        @include('partials.footer')
    </div>
</body>
</html>
