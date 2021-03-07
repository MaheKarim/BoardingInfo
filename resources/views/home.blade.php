<!DOCTYPE html>
<html lang="en">

   @include('backend.inc.header')

    <body class="sb-nav-fixed">

       @include('backend.inc.navbar')

        <div id="layoutSidenav">

          @include('backend.inc.sidebar')

            <div id="layoutSidenav_content">
                <main>
                 @yield('content')
                </main>

                @include('backend.inc.footer')

            </div>
        </div>

       @include('backend.inc.js')
    </body>
</html>
