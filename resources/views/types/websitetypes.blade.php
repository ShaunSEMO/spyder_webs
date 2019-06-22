<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    {{-- Custom css --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/pricing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/typesbrief.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/websitetypes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Spyder_Webs</title>
  </head>
  <body id='body'>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>

      {{-- header section --}}
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
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('types') }}">Types Of Websites</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                        </li>
                    </ul>

              </div>

            </nav>
            {{-- navbar --}}

            {{-- header content --}}
            <div class="header-content container">
                <img src="{{ asset('img/s_wlogo2.png') }}" class="img-fluid header-each header-img" alt="Responsive image">
                <br>
                <h4 class="subhead">What kind of website would you like?</h4>
                <br>
                <img src="{{ asset('img/slidedown.png') }}" class="img-fluid header-each slidedown" alt="Responsive image">
            </div>
            {{-- header content --}}

      </div>
<br><br>
<div class="container">
    <div class="row">
        @foreach($types as $type)
        <div class="col-sm col-md-6 col-lg-6">
        <div class="each-type">
          <br>
          <img class="img-fluid" src="{{ $type->image }}" alt="Type of website">
          <h1>{{ $type->title }}</h1>
          <p>{{ $type->body }}</p>
          <a href="{{ url('/types/'.$type->id) }}"><button type="button" class="btn btn-primary">Select</button></a>
          <br><br>
        </div>
      </div>
        @endforeach
    
      </div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>

  <nav class="footer navbar bg-dark navbar-expand-lg">
    <p >Copyright © 2019 | All rights reserved to <a href="https://spyderwebs.co.za/"> spyderwebs.co.za</a></p>
  </nav>
</html>
