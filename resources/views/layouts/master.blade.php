<!doctype html>
<html lang="en" id="home">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

  <title>@yield('title')</title>
</head>

<body>
  @include('layouts.navbar')
  @yield('content')

  <footer class="mt-5 bg-dark">
    <div class="container text-white p-4 text-justify">
      <div class="row">
        <div class="col-md-4">
          lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.
          lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.
        </div>
        <div class="col-md-4">
          lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.
          lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.
        </div>
        <div class="col-md-4">
          <strong>LANGGANAN NEWSLETTER</strong>
          <input type="text" name="" class="form-control rounded-pill mt-3" placeholder="Masukkan Email Anda">

          <button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
            <i class="fab fa-instagram"></i>
          </button>
          <button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
            <i class="fab fa-facebook-square"></i>
          </button>
          <button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
            <i class="fab fa-youtube"></i>
          </button>
          <button class="btn btn-outline-primary rounded-circle mr-3 mt-3">
            <i class="fas fa-envelope"></i>
          </button>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
</html>