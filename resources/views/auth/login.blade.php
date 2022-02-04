<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Yagobox - Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="/css/animated.css">
    <link rel="stylesheet" href="/css/owl.css">



<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <style type="text/css">




  .bg-container{
    /*text-align: center;*/
  }

  .text-center{
    text-align: center !important;
  }

  .mt-6{
    margin-top: 200px;
  }

  .right-slide{
    background-image: url("https://www.e-pixler.com/img_pixel_rechts.svg");
    background-position: center;
    background-repeat: no-repeat;
    height: 1000px;
    background-size: cover;
    
    
  }

  .tiny-logo-1{
    background-image: url("https://cdn.cdnlogo.com/logos/o/82/outlook.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;

  }

  .tiny-logo-2{
    background-image: url("https://cdn.cdnlogo.com/logos/l/78/linkedin-icon.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;
  }


  .tiny-logo-3{
    background-image: url("https://cdn.cdnlogo.com/logos/m/74/multimedia-email.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;
  }


  .tiny-logo-4{
    background-image: url("https://cdn.cdnlogo.com/logos/c/7/cpanel.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;
  }


  .tiny-logo-5{
    background-image: url("https://cdn.cdnlogo.com/logos/g/93/gmail.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;
  }

  .tiny-logo-6{
    background-image: url("https://cdn.cdnlogo.com/logos/s/43/sap.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    back
    display: flex;
    height: 50px;
    width: 50px;
  }


  .text-right{
    text-align: right;
  }








  </style>


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <!-- <img src="assets/images/logo-v3.png" alt=""> -->
              <img src="https://res.cloudinary.com/tapout/image/upload/v1638811139/BeFunky-design2_omkkzz.png" width="100px" height="100px" alt="" >

            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">

              <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="https://yagobox.com/#about">About</a></li>
              <li class="scroll-to-section"><a href="https://yagobox.com/#services">Services</a></li>
              <li class="scroll-to-section"><a href="https://yagobox.com/#portfolio">Features</a></li>

         <li class="scroll-to-section"><a href="/login">Login</a></li>              
              
              <li class="scroll-to-section"><a href="/register">Register</a></li> 
<!--               <li class="scroll-to-section"><a href="/contact">Contact Us</a></li> -->
              <li class="scroll-to-section"><div class="border-first-button"><a href="https://yagobox.com/#contact">Contact Us</a></div></li> 
              


            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  




<form method="POST" action="{{ route('login') }}" class="">
                        @csrf

  <div class="container-fluid ">
  <div class="row bg-container ">
    <div class="col-lg-6 col-md-6">
       <div class="col-12 left-slide mt-6  ">

        <!-- <div class="col-12 text-center">Please login to continue</div> -->
        <h3 class="col-12 text-center">Welcome back!</h3>
         <label for="exampleInputEmail1" class="col-8 offset-2 col-md-10 offset-md-1 col-lg-6 offset-lg-3 mt-2">Email address</label>

        <input id="email" value="{{old ('email') }}" class="col-8 offset-2 col-md-10 offset-md-1 col-lg-6 offset-lg-3" placeholder="Email" name="email" >

        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>

        @endif


        <label for="exampleInputEmail1" class="col-8 offset-2 col-lg-6 offset-lg-3 col-md-10 offset-md-1  mt-2">Password</label>
        
        <input id="password" value="{{old ('password') }}" class="col-8 offset-2 col-lg-6 col-md-10 offset-md-1 offset-lg-3 col-md-10 offset-md-1  " placeholder="Password" type="password" name="password">

        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>

        @endif



        <button class=" mt-2 col-8 offset-2 col-md-10 offset-md-1 col-lg-6 offset-lg-3 btn btn-primary">Log In</button>
        <div class="text-center mt-2">New to Yagobox? <a href="/register">Create an Account</a></div>

        <div class="mt-4 col-6 offset-3 justify-content-between row">
          <a href="/register" class="col-6 ">Forgot Password? </a> 
          <a href="/register" class="col-6 text-right">Forgot Email? </a>
        </div>
        <div class="text-center mt-5">
          <span>LET'S MAKE THE WORLD MORE PRODUCTIVE, TOGETHER.</span>
        </div>

        <!-- div class="col-6 offset-3 mt-4 text-center">Or sign in with;</div>
        
        <div class="row col-10 offset-1 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center ">
          
          <div class="col tiny-logo-1"> </div>
          <div class="col tiny-logo-2"> </div>
          <div class="col tiny-logo-3"> </div>
          <div class="col tiny-logo-4"> </div>
          <div class="col tiny-logo-5"> </div>
          <div class="col tiny-logo-6"> </div>


        </div> -->

      </div>
    </div>

    <div class="col-lg-6 col-md-6 d-none d-md-block full-height right-slide">
      


    </div>
  </div>

  
 </div>

</form>


<!--   <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Yagobox, Inc. All Rights Reserved. 
        </div>
      </div>
    </div>
  </footer>
 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>

  <!-- Scripts -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/owl-carousel.js"></script>
  <script src="/js/animation.js"></script>
  <script src="/js/imagesloaded.js"></script>
  <script src="/js/custom.js"></script>

</body>
</html>
