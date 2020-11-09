<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>

  <!-- css links -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('admin/js/core/popper.min.js')}}"></script>

</head>
<body>
<!-- Header Section -->
<div class="header m-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-12">
        <div class="logo">
        <img src="images/logoh.png" alt="">
        </div>
      </div>


      <div class="col-sm-12 col-lg-7">
        <div class="menu">
            <ul>
              <li><a href="{{ url('/') }}">HOME</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">ROOM</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTACTS</a></li>
            </ul>
        </div>
      </div>
      <div class="col-sm-12 col-lg-2">
        <div class="book-now">
          <a href="{{ Route('restaurent.page') }}" class="btn">Visit Restaurant</a>
        </div>
      </div>
    </div>
   </div>
</div>
<!-- End Menu Area -->

<!-- Start book Header Area -->

<div id="booking" class="section">
  <div class="container">
    <div class="intro">
      <h2>Welcome to <br> <span class="heading-primary-main">Hotel Marina International Limited </span></h2>
       <span class="heading-primary-sub"><h5>Get in Touch:
        <i class="fab facebook fa-facebook-f"></i>
        <i class="fab instagrame fa-instagram"></i>
        <i class="fab youtube fa-youtube"></i>
        <i class="fab twitter fa-twitter"></i>
      </h5></span>
    </div>
    <div class="find-room">
      <div class="row">
         <div class="col-sm-2">
            <div class="rbtn">
              <a href="{{ Route('single.room') }}" class="">SINGLE ROOM</a>
            </div>
            <div class="rbtn">
              <a href="{{ Route('double.room') }}" class="">DOUBLE ROOM</a><br>
            </div>
		     </div>
        <div class="col-sm-2">
          <div class="rbtn">
            <a href="{{ Route('tripple.room') }}" class="">TRIPPLE ROOM</a><br>
          </div>
          <div class="rbtn">
            <a href="{{ Route('familly.room') }}" class="">FAMILLY ROOM</a>
          </div>
        </div>
        <div class="col-sm-5"></div>
		   <div class="col-sm-3">
              <div class="Vrbtn">
                 <a href="{{ Route('restaurent.page') }}" class="">VISIT RESTAURENT</a>
              </div>
           </div>
        </div>
    </div>
  </div>
</div>

<!-- End Book header -->


<!-- responsive part of header -->


<div class="header-responsive hidden">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">Welcome to Hotel Marina International Limited </h2>
        <h5 class="text-center">Get in Touch:
          <i class="fab facebook fa-facebook-f"></i>
          <i class="fab instagrame fa-instagram"></i>
          <i class="fab youtube fa-youtube"></i>
          <i class="fab twitter fa-twitter"></i>
        </h5>
      </div>
    </div>

        <div class="row">

          <div class="col-6">
          <div class="resp-btn"> <a href="{{ Route('single.room') }}" class="">SINGLE ROOM</a></div>
          </div>

            <div class="col-6">
              <div class="resp-btn"><a href="{{ Route('double.room') }}" class="">DOUBLE ROOM</a><br>
              </div>
            </div>
            
            <div class="col-6">
              <div class="resp-btn"><a href="{{ Route('tripple.room') }}" class="">TRIPPLE ROOM</a><br></div>
            </div>

          <div class="col-6"> 
            <div class="resp-btn"><a href="{{ Route('familly.room') }}" class="">FAMILLY ROOM</a></div>
            </div>
          
     </div>
  </div>
</div>


@yield('content')

<!-- Start footer area -->
<div class="footer-area mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-5">
        <div class="footer-col">
          <h2>HOTEL MARINA</h2>
          <i class="fab facebook fa-facebook-f"></i>
          <i class="fab instagrame fa-instagram"></i>
          <i class="fab youtube fa-youtube"></i>
          <i class="fab twitter fa-twitter"></i>
          <p>Copyright ©2020 All rights <br> reserved | This template <br> is made by <a class="webamex" href="#"><strong>WebAmex</strong></a></p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-5">
        <div class="footer-col">
          <h2>Quick Links</h2>
          <ul>
              <li><a href="{{ url('/') }}">HOME</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">ROOM</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTACTS</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-5">
        <div class="footer-col">
          <h2>Reservation</h2>
          <ul>
            <li>Tel: 345 5667 889</li>
            <li>Skype: Marianabooking</li>
            <li>reservations@hotelmarina.com</li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-2 col-sm-5">
      <div class="footer-col">
        <div class="social-media">
          <h2>Our Location</h2>
           <ul>
              <li>198 West 21th Street,</li>
              <li>Suite 721 New York NY 10016</li>
              <li>reservations@hotelmarina.com</li>
              <div class="single mt-2">
                
              </div>
            </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

<!-- Js LINKS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>