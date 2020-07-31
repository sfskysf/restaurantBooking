@extends('layout.app')
@section('head')
<link rel="stylesheet" type="text/css" href={{asset('css/Restaurantmenu.css')}} />
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet"> 
@endsection
@section('content')
<div class='mainbg'>
  <div class="d-flex flex-row justify-content-center">
    <div class="col-md-5 p-3">
      <h3>Restaurant Menu</h3>
      <hr/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolores accusantium dolorem veniam consequatur
      aut, magni nesciunt. Ducimus perspiciatis asperiores maiores similique, sapiente saepe nam eaque. Iste voluptates
      commodi temporibus.</p>
    </div>
  </div>
  <a href="#" class="btn bannerbutton">
    Online Booking
  </a>
</div>


<!---------------------->


<div class='menu'>
  <div class="d-flex flex-row menutabs">
    <div class="p-2 "><a class="bannerbutton">Appatezirs</a></div>
    <div class="p-2"><a class="bannerbutton">Salads</a></div>
    <div class="p-2"><a class="bannerbutton active">Main courses</a></div>
    <div class="p-2"><a class="bannerbutton">Deserts</a></div>
  </div>
  
  <h2>Lorem Ipsum</h2>
  <div class="grid-container">
    <div class="grid-item">
      <p>Main dish course dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>8.5$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>16.5$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>9.5$</span>
      </p>
    </div>
  </div>
  <div class='secondgrid'>
    <div class="grid-container">
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>8.5$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>2.5$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>5.5$</span>
        </p>
      </div>
    </div>
  </div>
  <hr id='menuhr' />
  <h2>Lorem Ipsum</h2>
  <div class="grid-container">
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>1$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>3.4$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>20.5$</span>
      </p>
    </div>
  </div>
  <div class='secondgrid'>
    <div class="grid-container">
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>3.5$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>2.5$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>1.5$</span>
        </p>
      </div>
    </div>
  </div>
  <hr id='menuhr' />
  <h2>Lorem Ipsum Dolor</h2>
  <div class="grid-container">
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>73$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>15$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>20$</span>
      </p>
    </div>
  </div>
  <div class='secondgrid'>
    <div class="grid-container">
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>100$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>46$</span>
        </p>
      </div>
      <div class="grid-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
          <span class='price'>26$</span>
        </p>
      </div>
    </div>
  </div>
  <hr id='menuhr' />
  <h2>Sit Amet</h2>
  <div class="grid-container">
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>4.5$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>5.5$</span>
      </p>
    </div>
    <div class="grid-item">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br />
        <span class='price'>5.5$</span>
      </p>
    </div>
  </div>

</div>
@endsection