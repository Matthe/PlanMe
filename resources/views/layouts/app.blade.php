<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="">
<head>
    @include('partials.head')
</head>
<body>
    <div id="app">
        @include('partials.navbar')

        <div class="container">

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <div class="fixed-bottom">
            @include('partials.footer')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
