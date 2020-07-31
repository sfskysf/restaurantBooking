@extends('layout.app')
@section('head')
<link rel="stylesheet" type="text/css" href={{asset('css/RestaurantMain.css')}} />
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  
@endsection


@section('content')
<div class="container-fluid main-container">




  <div class="Carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- Carousel here -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://images.wallpaperscraft.com/image/evening_table_dinner_restaurant_coast_look_fires_garland_48367_3840x2400.jpg"
            width="100%" height="800" alt="First slide" />
          <div class="carousel-caption">
            <div class="caps">
              <h1 id="firstcap">Visit <span style="font-family: italianno"> Restaraunt Name</span></h1>
              <p id="secondcap">
                Two courses for £15 when you dine with a friend
              </p>
              <button type="button" class="btn btn-outline-light">
                Book A Place
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="http://wallpapercrafter.com/desktop/246362-table-chair-restaurant-and-hotel-hd.jpg" width="100%"
            height="800" alt="Second slide" />
          <div class="carousel-caption">
            <div class="caps">
              <h1 id="firstcap">Visit Our Restaraunt</h1>
              <p id="secondcap">
                Two courses for £15 when you dine with a friend
              </p>
              <button type="button" class="btn btn-outline-light">
                Book A Place
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://d37219swed47g7.cloudfront.net/media/images/guides/14-philly-byobs-with-outdoor-seating/banners/1558559614.09.jpg"
            width="100%" height="800" alt="Third slide" />
          <div class="carousel-caption">
            <div class="caps">
              <h1 id="firstcap">Visit Our Restaraunt</h1>
              <p id="secondcap">
                Two courses for £15 when you dine with a friend
              </p>
              <button type="button" class="btn btn-outline-light">
                Book A Place
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mainstory container wow slideInLeft">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class='imgcont'>
          <img src="https://i.pinimg.com/originals/97/10/64/971064eaf0cc630e996d34b867368683.jpg" class="mainstoryimg"
            width="500px" height="630px" />
        </div>
      </div>

      <div class="col">
        <div class="mainstorytext">
          <div class="row theHeader">
            <div class="col-8">
              <h3>
                about us</h3>
              <h1>
                Located In A Big Town
              </h1>
              <h5>
                How Restaraunt Name came to life.
              </h5>
            </div>

            <div class="col-3 experience">

              <h2>
                45
              </h2>
              <h4> YEARS OF EXPERIENCE</h4>


            </div>
          </div>

          <!----start of the text paragraphs --->


          <div class='textareas'>
            <p>
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat.
            </p>
            <p class="secondparagraph">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----------------->

  <div class="container restaurant-features ">
    <div class="row ">
      <div class="col-3 why  d-flex align-items-center">
        <p>Why our food is the best food in the world
        </p>
      </div>


      <div class="col-9 features">
        <div class="row ">
          <div class="col-4 one">
            <img src={{asset('css/images/homepage/1.png')}} class="img-fluid mx-auto d-block featuresicon">
            <h2 class="">Food Quality</h2>

            <p>Lorem ipsum dolor sit amet, minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</p>

            <a class="btn featuresbtn mx-auto d-block" href="#" role="button">Check our menu now</a>

          </div>
          <div class="col-4 two">
            <img src={{asset('css/images/homepage/2.png')}} class="img-fluid mx-auto d-block featuresicon">
            <h2 class="">Quality chefs</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>

          </div>
          <div class="col-4 three">
            <img src={{asset('css/images/homepage/3.png')}} class="img-fluid mx-auto d-block featuresicon">
            <h2 class="">Online Booking</h2>

            <p>Lorem ipsum dolor sit amet, minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</p>
            <a class="btn featuresbtn mx-auto d-block" href="#" role="button">Book your table now</a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!---------------------------->

  <div class="homepageGallery container-fluid">
    <div class="d-flex flex-row justify-content-center title">
      <div class="p-2">
        <h3>Dishes</h3>
      </div>
    </div>
    <div class="flex-row d-flex justify-content-center">
      <div class="p-4">
        <div class="cardbody">
          <img src="{{ asset('css/images/homepage/11.png') }}" alt="">
          <div class="cardcaption">
            <h3>Sea food</h3>
            <p>Lorem ipsum. Non donec et phasellus odio volutpat at. phasellus odio volutpat at</p>
          </div>
        </div>
      </div>

      <div class=" p-4">
        <div class="cardbody">
          <img src="{{ asset('css/images/homepage/22.png') }}" alt="">

          <div class="cardcaption">
            <h3>Dinner Menu</h3>
            <p>Lorem ipsum. Non donec et phasellus odio volutpat at. phasellus odio volutpat at</p>
          </div>
        </div>
      </div>

      <div class="p-4">
        <div class="cardbody">
          <img src="{{ asset('css/images/homepage/33.png') }}" alt="">

          <div class="cardcaption">
            <h3>Breakfast menu</h3>
            <p>Lorem ipsum. Non donec et phasellus odio volutpat at.phasellus odio volutpat at</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- ------------ -->
















</div>

@endsection