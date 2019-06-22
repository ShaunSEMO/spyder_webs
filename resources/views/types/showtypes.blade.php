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
    <link href="{{ asset('css/pages/showtypes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Spyder_Webs</title>
  </head>
  <body id='body'>

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
                <h5 class="subhead">So you would like a {{ $types->title }}?</h5>
                <img src="{{ asset('img/slidedown.png') }}" class="img-fluid header-each slidedown" alt="Responsive image">
            </div>
            {{-- header content --}}
      </div>
      <!-- header section -->

      <div class="type container">
        <br>
        <img class="img-fluid" src="{{ asset($types->image) }}" alt="Type of website">
        <br>
        <br>
        <h1>{{ $types->title }}</h1>
        <br>
        <p>{{ $types->body }}</p>
      </div>


      <div class="site-content">
        <br><br>
        @include('sections.3pricing')
      </div>
      

      <div class="enquiry">
        
        <h1 class="sec-header">Let's discuss about your website</h1>
        <hr class="sh-uline">
        
        <br><br>

        <div class="container">
            <form action="https://formspree.io/info@spyderwebs.co.za " method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                      @if (Session::has('file_message'))
                          <div class="alert alert-success" role="alert">
                              {{Session::get('file_message')}}
                          </div>
                      @endif
                      <p>Domain name</p>
                      <input name="domain" type="name" class="form-control" id="exampleFormControlInput1" placeholder="www.yourdomain.com">
                      @if ($errors->has('domain'))
                          <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                      @endif
                      <br>
                      <p>Would you like a business E-mail?</p>
                      <p>E.g info@yourdomain.com</p>
                      <small>Included in silver and gold package</small>
                      <br>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Business E-mail" value="yes">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Business E-mail" id="inlineRadio2" value="No">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                      <br>
                      <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Is there anything else you would like to have on your website?"></textarea>
                      @if ($errors->has('message'))
                          <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                      @endif
                      <br>
                      <input name="fullname" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                      @if ($errors->has('email'))
                          <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                      @endif
                      <br>
                      <input name="email" type="name" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                      @if ($errors->has('email'))
                          <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                      @endif
                      <br>
                      <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
        </div>
        

        <br><br>
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
