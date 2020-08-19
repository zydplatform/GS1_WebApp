<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js-focus-visible">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kiganda Ivan">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
	<title>GS1 Uganda</title>
	<link rel="icon" href="images/newlogo1.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="assets/js-slider/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
	<!-- video player -->
	<link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <!-- polygonal background -->
<!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="assets/src/polygonizr.min.js"></script>
  <style>

    #site-landing {
      position: relative;
      height: 770px;
      width: 100%;
      background-color: rgb(30, 30, 30);
    }
  </style> -->
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
</head> <div class="header" style="padding-bottom: 10px;padding-top: 15px;">
    <div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;">
      <div class="row">
        <div class="col-sm-4" ><span id="logo" style="float: right;"><img src="images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span></div>
        <div class="col-sm-4"><h4>Welcome to  GS1 Uganda</h4>
        <p>The Global Language of Business</p></div>
        <div class="col-sm-4">    
          <a href="{{url('registration')}}"><h6 style="color: #0090bf">Register With Us</h6> </a>    
          <form action="" method="POST" class="inline-form">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <!-- <span class="fa fa-search"></span> -->
                </div>

                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1" style="color: #ff5721;background-color: white;"><i class="fa fa-angle-right"></i></span>
                <button id="login"><i class="fa fa-user"></i> <a  href="{{url('login')}}" style="text-decoration: none;color: white;"> Membership Login</a></button>
            </form>
                
        </div>
            
      </div>
    </div>
  </div>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light ">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">Home</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{url('aboutus')}}" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('aboutus')}}">What we do </a>
              <a class="dropdown-item" href="{{url('aboutus')}}">Start Here</a>
              <a class="dropdown-item" href="{{url('aboutus')}}">GS1 Uganda Council</a>
              <a class="dropdown-item" href="{{url('aboutus')}}">Legal</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('aboutus')}}">License And Registration fees</a>
              <a class="dropdown-item" href="{{url('aboutus')}}">Why You should register</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{url('services')}}" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('services')}}">Training Programs </a>
              <a class="dropdown-item" href="{{url('services')}}">Get Barcodes</a>
              <a class="dropdown-item" href="{{url('services')}}">Data Syncronization Platform</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('services')}}">Barcode Verification Service</a>
              <a class="dropdown-item" href="{{url('services')}}">Barcode Costs</a>
              <a class="dropdown-item" href="{{url('services')}}">Item Measurement Service</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{url('resources')}}" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('resources')}}">Standards & Guidelines</a>
              <a class="dropdown-item" href="{{url('resources')}}">Publications</a>
              <a class="dropdown-item" href="{{url('resources')}}">Terms & Conditions</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('resources')}}">Glossary</a>
              <a class="dropdown-item" href="{{url('resources')}}">Technical Desk</a>
              <a class="dropdown-item" href="{{url('resources')}}">Customer Support</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{url('tools')}}" role="button" aria-haspopup="true" aria-expanded="false">GS1 Tools</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('tools')}}">Check Digital Calculator</a>
              <a class="dropdown-item" href="{{url('tools')}}">GTIN Management Decision Tool</a>
              <a class="dropdown-item" href="{{url('tools')}}">GS1 Company Database (GEPIR)</a>
              <a class="dropdown-item" href="{{url('tools')}}">EPC Item Readiness Program</a>
              <a class="dropdown-item" href="{{url('tools')}}">EPC Encoder/Decoder</a>
              <a class="dropdown-item" href="{{url('tools')}}">GS1 Global Attribute Explorer</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
       </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="{{url('contact')}}">Contact Us</a>
        </li>
    </ul>
  </div>
  </nav>
 
  @yield('content')

  <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="./assets/app.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</body>
</html>