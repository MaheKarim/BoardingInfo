<!DOCTYPE html>
<html lang="en">

   @include('user.inc.header')

    <body class="sb-nav-fixed">

       @include('user.inc.navbar')

        <div id="layoutSidenav">

          @include('user.inc.sidebar')

            <div id="layoutSidenav_content">
                <main>
                 @yield('content')
                </main>

                @include('user.inc.footer')

            </div>
        </div>

       @include('user.inc.js')
    </body>
</html>
