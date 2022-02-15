<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Rozorpay Payment Integration Demo - laravelcode.com</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<link rel="stylesheet" href="css/asset/bootstrap.min.css">
<!-- Customizable CSS -->
<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/asset/main.css">
<link rel="stylesheet" href="css/asset/blue.css">
<link rel="stylesheet" href="css/asset/owl.carousel.css">
<link rel="stylesheet" href="css/asset/owl.transitions.css">
<link rel="stylesheet" href="css/asset/animate.min.css">
<link rel="stylesheet" href="css/asset/rateit.css">
<link rel="stylesheet" href="css/asset/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="/css/asset/font-awesome.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    @yield('style')
</head>
<body>
    <?php
    use App\Http\Controllers\MainCategoryController;
    $total = MainCategoryController::cartitem();
  ?>
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
 
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">   <br>
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="/dashboard"> <img src="/images/logo.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        <br>  <br>
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{url('/product/search')}}" method="post">
            {{csrf_field()}}
              <div class="control-group">
                <input type="text" name="searchproduct" required class="search-field" placeholder="Search here..." />
                <button style="margin-left:134px" class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
              </div>
            </form>
          </div>

          <div id="userdetails" class="dropdown">
            <button onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }}</button><b id="arrow" class="caret"></b> 
            <div id="myDropdown" class="dropdown-content">
              <a href='{{url("/postads")}}'> + SELL</a>
              <!-- <a href='{{url("/cartlist")}}'>MY CART</a> -->
              <a href='{{url("/mysellingbooks")}}'>My ADS</a>
              <form method="POST" action="{{ route('logout') }}" >
                @csrf
                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" style="color:black;">
                  <p>  {{ __('Logout') }}</p>
                  </x-dropdown-link>
              </form>
            </div>
          </div>

          <div id="shopping">
            <div class="basket">
              <a href='{{url("/cartlist")}}'><i  style="margin-left: 808px; background: #006cb4;" id="shopingcart" class="icon fa fa-shopping-cart"></i></a>
              <span id="countcart" class="count">{{$total}}</span>
            </div>
          </div>

          <!-- <div style="margin-left: 749px; background: #006cb4;">
            <div class="basket">
              <a href='{{url("/cartlist")}}'><i id="shopingcart" class="icon fa fa-shopping-cart"></i></a>
              <span style="margin-top:-19px" id="count" class="count">{{$total}}</span>
            </div>
          </div> -->
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
 
    <br>

        
         
    <!-- /.container --> 
  </div>
            
      </div>
   <br>
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="" >Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="" >Classics</a></li>
                <li class="dropdown mega-menu"> 
                <a href="">Comic Book</a>
                </li>
                <li class="dropdown hidden-sm"> <a href=""> Horror</a> </li>
                <li class="dropdown hidden-sm"> <a href="">Detective </a> </li>
                <li class="dropdown"> <a href="">Essays</a> </li>
                <li class="dropdown"> <a href="">Historical Fiction</a> </li>
                <li class="dropdown"> <a href="">Science Fiction</a> </li>
                <li class="dropdown"> <a href="">Short Stories</a> </li>
               
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>
  
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
            <div class="panel panel-default">
                <div class="panel-heading">Pay With Razorpay</div>

                <div class="panel-body text-center">
                    <form action="{!!route('payment')!!}" method="POST" >
                        <h3>Contact Detials</h3>
  <div class="row">
      <div class="col-lg-6">
          <div class="col-lg-12">
              <div class="form-group">
                  <label><strong>First Name</strong></label>
                  <input type="text" class="form-control" name="authorname" placeholder="First Name" required>
              </div>
          </div>
        </div>
      <div class="col-lg-6">
          <div class="col-lg-12">
              <div class="form-group">
                  <label><strong>Last Name</strong></label>
                  <input type="text" class="form-control" name="publisher" placeholder="Last Name" required>
              </div>
           </div>
        </div>
  </div>
  <div class="row">
      <div class="col-lg-6">
          <div class="col-lg-12">
              <div class="form-group">
                  <label><strong>Contact No.</strong></label>
                  <input type="text" class="form-control" name="price" placeholder="Contact No" required>
              </div>
          </div>
        </div>
      <div class="col-lg-6">
          <div class="col-lg-12">
              <div class="form-group">
                  <label><strong>Email</strong></label>
                  <input type="email" class="form-control" name="name" placeholder="Email" required>
              </div>
          </div>
        </div>
  </div>
<h3>Billing Address</h3>
  <div class="row">
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>Street Address</strong></label>
                  <input type="text" class="form-control" name="street address" placeholder="Street Address" required>
              </div>
          </div>
        </div>
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>Street Address Line-2</strong></label>
                  <input type="text" class="form-control" name="street address line-2" placeholder="Street Address Line-2" required>
              </div>
          </div>
        </div>
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>City</strong></label>
                  <input type="text" class="form-control" name="city" placeholder="City" required>
              </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>District</strong></label>
                  <input type="text" class="form-control" name="district" placeholder="District" required>
              </div>
          </div>
        </div>
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>State</strong></label>
                  <input type="text" class="form-control" name="state" placeholder="Sate" required>
              </div>
          </div>
        </div>
      <div class="col-md-4">
          <div class="col-md-12">
              <div class="form-group">
                  <label><strong>Pincode</strong></label>
                  <input type="text" class="form-control" name="pincode" placeholder="Pincode/Postalcode/Zipcode" required>
              </div>
          </div>
        </div>
  </div>

                        <!-- Note that the amount is in paise = 50 INR -->
                        <!--amount need to be in paisa-->
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ Config::get('custom.razor_key') }}"
                                data-amount="1000"
                                data-buttontext="Pay INR"
                                data-name="Memorial"
                                data-description="Order Value"
                                data-image="https://www.laravelcode.com/upload/logo.svg"
                                data-prefill.name="name"
                                data-prefill.email="email"
                                data-theme.color="royalblue">
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>