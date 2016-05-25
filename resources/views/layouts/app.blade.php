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
<body id="app-layout">
    <nav class="navbar navbar-static">
        <div class="container">
            <div class="navbar-header">

            
            <a class="navbar-brand" href="{{ url('/home') }}" target="ext"><b>积发软件</b></a>
            
            <a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      
      
                <!-- Collapsed Hamburger -->
<!--                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"> -->
<!--                     <span class="sr-only">Toggle Navigation</span> -->
<!--                     <span class="icon-bar"></span> -->
<!--                     <span class="icon-bar"></span> -->
<!--                     <span class="icon-bar"></span> -->
<!--                 </button> -->

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">首页</a></li>
                    <li><a href="{{ url('/home') }}">积分联盟</a></li>
                    <li><a href="{{ url('/home') }}">软件服务</a></li>
                    <li><a href="{{ url('/home') }}">短彩信</a></li>
                    <li><a href="{{ url('/home') }}">关于我们</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
<!--                 <ul class="nav navbar-nav navbar-right"> -->
                    <!-- Authentication Links -->
<!--                     @if (Auth::guest()) -->
<!--                         <li><a href="{{ url('/login') }}">登录</a></li> -->
<!--                         <li><a href="{{ url('/register') }}">注册</a></li> -->
<!--                     @else -->
<!--                         <li class="dropdown"> -->
<!--                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> -->
<!--                                 {{ Auth::user()->name }} <span class="caret"></span> -->
<!--                             </a> -->

<!--                             <ul class="dropdown-menu" role="menu"> -->
<!--                                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li> -->
<!--                             </ul> -->
<!--                         </li> -->
<!--                     @endif -->
<!--                 </ul> -->
            </div>
        </div>
    </nav>

    @yield('content')

    
    <script src="/js/final.js"></script>
    <!-- JavaScripts -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script> -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
<!--     {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->
</body>
</html>
