<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Decatlon</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Deca</span>tlon</a>

        <form action='{{url("search")}}'>
            @csrf
            <div class="input-group input-navbar">
              <div class="input-group-prepend">
                <input type="submit" value="Search" class="input-group-text" id="icon-addon1"></input>
              </div>
              <input type="search" name="search" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">

            </div>
          </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>


            @if((Route::has('login')))
            @auth
            <x-app-layout>

            </x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
              </li>
              @endauth
              @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOVwjifwwuWb2wNC2npbeJ5ui4l6xmDMKBWokULXVaKHB1SGWABKEW7z2j64dgXcQkhk&usqp=CAU);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Your Ultimate Defense for Athletic Excellence!</span>
        <h1 class="display-4">Sports life</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
    </div>
    </div>
</div>



    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Sports Hub ! </h1>
            <p class="text-grey mb-4">Explore a world of style and convenience at ShopHub, your ultimate online shopping destination. Discover a curated selection of fashion, electronics, and home essentials with user-friendly navigation and exclusive deals. Elevate your shopping experience and redefine your lifestyle with ShopHub – where trends meet efficiency, and your satisfaction is our priority.</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="https://media.istockphoto.com/id/515232220/fr/photo/homme-de-coureur-isol%C3%A9e-ensemble.jpg?s=612x612&w=0&k=20&c=8545Ds6yCKd7RyivwrkFg6MpvKBHr0OZ2xVoUK8euyg=" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="page-section bg-light ">
    <h1 class="font-mono text-center text-2xl">Product</h1>
    <div class="container flex flex-wrap m-auto">
      @foreach ($allProduct as $item)
      <div class="bg-white mt-5   m-1 w-48 flex flex-col justify-between">
        <a href="{{route('product.show',$item->id)}}">
                <div class="flex mx-4 h-3/5 w-2/5 mt-4  text-gray-700 ">
                  <img
                    src={{"http://127.0.0.1:8000/images/".$item->image}}
                    alt="card-image" class="w-full h-full"/>
                </div>
                <a>
            <div class="p-6   ">
                  <div class="flex items-center justify-between mb-2">
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        {{$item->title}}
                    </p>
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                      ${{$item->price}}
                    </p>
                  </div>
                  <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                    {{$item->description}}
                  </p>
                    <div class="p-6 pt-0">
                            <button
                            class=" mt-2 -mb-2 w-full rounded bg-yellow-400 p-4 text-sm font-medium  "
                            type="button">
                            Add to Cart
                            </button>
                    </div>
                </div>

    </div>
    @endforeach
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Contact US</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit </button>
      </form>
    </div>
  </div> <!-- .page-section -->



  <footer class="page-footer w-full">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-2">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-2">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Decathlon</a></li>
            <li><a href="#">Decathlon</a></li>
            <li><a href="#">Decathlon</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-2 ">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 ,TATA, MARoc 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">aitelquadiyoussef3@gmail.com</a>
        </div>
        <div>
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3 ">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2024 . All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
