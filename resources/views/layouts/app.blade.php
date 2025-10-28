<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pink University</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
  @include('partials.navbar')

  <div class="container py-4">
    @yield('content')
  </div>
<style>
  body {
    position: relative;
    min-height: 100vh;
    margin: 0;
    background: none; /* remove direct background so overlay works */
  }

  /* Background image layer with opacity */
  body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("{{ asset('image/background.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.7; /* 👈 adjust: 0.1 = faint, 1 = full color */
    z-index: -1;  /* keeps image behind all content */
  }
</style>



  @include('partials.footer')

  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
