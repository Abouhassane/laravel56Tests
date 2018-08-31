<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div id="app">

            @include('includes.navbar')

            <div class="container py-4">

                @include('includes.alerts.flash')

                <main id="main" class="row">
                    @yield('content')
                </main>

            </div>
            <br/>
            <footer class="footer">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
