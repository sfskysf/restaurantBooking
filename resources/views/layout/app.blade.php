<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>Restaurant layout</title>



    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />


    <link rel="stylesheet" href="css/libs/animate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href={{asset('css/layout.css')}} />

    @yield('head')
</head>

<body>
    <div id="">
        <nav class="navbar navbar-expand-lg navbar-custom sticky-top">

            <a href="RestarauntMain.html" class="navbar-brand">
                <h1 id="navbrnd">Restaurant Name</h1>
            </a>

            <!-------------------->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu')}}">Menu</h5></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reservations')}}">Booking</h5></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>

            </div>
        </nav>


        @yield('content')

<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #1a1a1a !important;">

  <!-- Footer Links -->
  <div class="container" '>

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h4 class="text-uppercase font-weight-bold">
          <a href="#top" style = ' color:white;'>About us</a>
    </h4>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
    <h4 class="text-uppercase font-weight-bold">
      <a href="RestarauntMenu.html" style='color:white;'>Menus</a>
    </h4>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
    <h4 class="text-uppercase font-weight-bold">
      <a href="#feat" style='color:white;'>Features</a>
    </h4>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
    <h4 class="text-uppercase font-weight-bold">
      <a href="RestarauntContact.html" style='color:white;'>Contact Us</a>
    </h4>
  </div>
  <!-- Grid column -->

  </div>
  <!-- Grid row-->
  <hr class="rgba-white-light" style="margin: 0 15%; background-color: white;">

  <!-- Grid row-->
  <div class="row d-flex text-center justify-content-center ">

    <!-- Grid column -->
    <div class="col-md-8 col-12 mt-5">
      <p style="line-height: 3.7rem; font-size: 17; color: white; opacity: 0.8;">Sed ut perspiciatis unde omnis iste
        natus error sit voluptatem
        accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
        explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

  </div>
  <!-- Footer Links -->

</footer> 

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</body>

</html>