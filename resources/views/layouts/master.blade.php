<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="/fonts/goocss.css">

    <!-- Styles -->
    <link href="/css/final.css" rel="stylesheet">
    <link href="/css/grayscale.css" rel="stylesheet">
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
	
	<!-- javascript -->

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


 <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
        <div class="col-md-4">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
                <h1>          
               <a class="navbar-brand" href="{{ url('/') }}" target="ext">
               <b class="brandword">积发软件</b>
               <p >电商企业的CRM与IT后盾</p>
               </a>
               </h1>
            </div>
            </div>

            <div class="col-md-8">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li><a href="{{ url('/') }}">首页</a></li>
                    <li><a href="{{ url('/union') }}">积分联盟</a></li>
                    <li><a href="{{ url('/service') }}">软件服务</a></li>
                    <li><a href="{{ url('/message') }}">短彩信</a></li>
                    <li><a href="{{ url('/aboutus') }}">关于我们</a></li>
                </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   

    @yield('content')

    
    <script src="/js/final.js"></script>
    
    <script src="/js/theme.js"></script>
    <script src="/js/jssor.slider.mini.js"></script>
    <script>
//         jQuery(document).ready(function ($) {

//             var options = {
//                 $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
//                 $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
//                 $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
//                 $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

//                 $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
//                 $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
//                 $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
//                 $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
//                 //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
//                 //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
//                 $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
//                 $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
//                 $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
//                 $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
//                 $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
//                 $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
              
//                 $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
//                     $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
//                     $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
//                     $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
//                     $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
//                     $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
//                     $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
//                     $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
//                     $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
//                     $Scale: false                                   //Scales bullets navigator or not while slider scale
//                 },

//                 $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
//                     $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
//                     $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
//                     $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
//                     $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
//                 }
//             };

//             var jssor_slider1 = new $JssorSlider$("slider1_container", options);

//             //responsive code begin
//             //you can remove responsive code if you don't want the slider scales while window resizing
//             function ScaleSlider() {
//                 var bodyWidth = document.body.clientWidth;
//                 if (bodyWidth)
//                     jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
//                 else
//                     window.setTimeout(ScaleSlider, 30);
//             }
//             ScaleSlider();

//             $(window).bind("load", ScaleSlider);
//             $(window).bind("resize", ScaleSlider);
//             $(window).bind("orientationchange", ScaleSlider);
//             //responsive code end
//         });
    </script>
    
</body>
</html>