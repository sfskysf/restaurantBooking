@extends('layout.app')
@section('head')
<link rel="stylesheet" type="text/css" href={{asset('css/booking.css')}} />

@endsection

@section('content')

<div id="app" class="container-fluid bookingcontainer">
    <div class="row bookingtitle justify-content-center">
        <h2><span style="color: #F9CF64">Book a table </span> online now</h2>
    </div>
    <div class="row">
        <div class="col-md-6 ohimtired">

            <booking></booking>

        </div>
        <div class="col-md-6 bookingnotes">

            <div class="infonotes">
                <p class="restaurantinfo">+1 444 555 666 333</p>
                <p class="restaurantinfotype"> PHONE NUMBER </p>
                <p class="restaurantinfo"> contact@restaurant.com</p>
                <p class="restaurantinfotype"> EMAIL ADDRESS</p>
                <p class="restaurantinfo"> 212 street address at address</p>
                <p class="restaurantinfotype"> STREET ADDRESS</p>
            </div>
            <div class="bookingDetails">
                <p>
                    After making a reservation we will be contacting your shortly to follow up on your table reservations
                    and
                    fill you.
                </p>

                <p>consectetur adipiscing elit. Sed pretium ante amet rutrum nunc sagittis tristique lectus arcu turpis
                    aenean. Purus amet ultrices morbi parturient porta penatibus dictum orci.
                </p>

                <p>Pellentesque cras at sit venenatis tempus facilisis ut in et. Massa in facilisis sit fermentum morbi.
                    In.
                </p>
            </div>
        </div>

    </div>


</div>




<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection