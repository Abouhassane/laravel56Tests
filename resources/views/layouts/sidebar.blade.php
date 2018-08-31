<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div id="app">

            @include('includes.navbar')

            <div class="container py-4">

                <main class="row">

                    <!-- sidebar content -->
                    <div id="sidebar" class="col-md-4">
                        @include('includes.sidebar')
                    </div>

                    <!-- main content -->
                    <div id="content" class="col-md-8">
                        <!-- include('includes.alerts.flash') -->
                        @include('flash::message')
                        
                        @yield('content')
                    </div>

                </main>

            </div>
            <br/>
            <footer class="footer">
                @include('includes.footer')
            </footer>

            <!-- scripts -->
            <script type="application/javascript">
                $('div.alert').not('.alert-important').delay(3000).slideUp(300);
            </script>
        </div>
    </body>
</html>
