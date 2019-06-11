<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Spyder Webs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    {{-- Custom css --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/need_website.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>

    <div class="header-sec">

          {{-- navbar --}}
          <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="{{ url('home') }}">SW</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
              </ul>

            </div>

          </nav>
          {{-- navbar --}}

          {{-- header content --}}
          <div class="header-content container">

            <h3>Here's why you need a website.</h3>
            <br>
            <img src="{{ asset('img/slidedown.png') }}" class="img-fluid header-each slidedown" alt="Responsive image">
            <br>
            <br>
            <video width="320" height="240" controls>
              <source src="movie.mp4" type="video/mp4">
              Your browser does not support the video tag, but you need a website!
            </video>
            <br>
            <a href="{{ url('home') }}"><button type="button" class="btn btn-primary">Get a website!</button></a>
          </div>
          {{-- header content --}}

    </div>

  </body>
</html>
