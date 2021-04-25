<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('') }}"
    <link rel="icon" href="../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>
 <br>
    <div class="container">
      <div class="masthead">
        <h3 class="text-muted">Boarding Information System</h3>
         <br> <br>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>BoardingInfo Sys!</h1>
        <p class="lead">
            {{ __('text.BIS') }} <br> <br>
            {{ __('text.Jatra') }}
        </p>
        <p>
        <a class="btn btn-lg btn-success" href="{{ route('register') }}" role="button">Register as a Tourist</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Login To Your Account</h2>
          <p>
         {{ __('text.login') }}
        </p>
          <p>
              <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login &raquo;</a></p>
        </div>

          <div class="col-lg-4">
          <h2>Heading</h2>
          <p id="app">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p>
          </p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Tourist Boarding Information System {{ now()->year }}</p>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="{{ asset('js/app.js') }}">

    </script>
  </body>
</html>
