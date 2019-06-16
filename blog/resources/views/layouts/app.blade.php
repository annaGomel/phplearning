<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $title }}</title>

    <!-- Bootstrap -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/offcanvas.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-select-1.13.2/css/bootstrap-select.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="wrapper">
    <header>
      <!--========================== Header-Top ================================-->
      <div class="header-top">
        <div class="container">
          <div class="col-md-9 col-sm-7 xs-view">
            <a href="{{ route('home') }}"><img class="logo"  src="{{asset('images/logo.png')}}" alt="Logo"/></a>
          </div>
          <div class="col-md-3 col-sm-5 xs-view-right">
            <div class="search-section center-block inp-search">
              {{ Form::open(['method' => 'GET']) }}
                {{ Form::text('search', null ,['class' => 'form-control', 'id' => 'search', 'placeholder' => __('site.inp_search') ]) }}
                {{ Form::button('<i class="fa fa-search"></i>', ['class' => 'btn btn-default btn-xs', 'type' => 'submit']) }}
              {{ Form::close() }}
            </div>
            <!-- Author -->
            @if (Route::has('login'))
              <div class="author-form">
                <li class="dropdown">
                  <div class="form">
                    @auth
                      <a href="#" class="dropdown-toggle author-icon" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user author-icon"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <ul class="nav nav-menu">
                          <li>
                            <div class="author-img">
                          <img src="{!! Auth::user()->avatar?asset('images/portfolio/'.Auth::user()->avatar):asset('images/portfolio/default/default.png') !!}" alt="Card image cap" > <h3>{{ __('site.menu_item_user') }}: {{ Auth::user()->nickname }}</h3>
                        </div>
                          </li>
                          <li>
                            <a class="sign" href="{{ route('users.profile') }}">{{ __('site.menu_item_profile') }}</a>
                          </li>
                          <li>
                            <a class="sign" href="{{ route('articles.trash') }}">{{ __('site.menu_item_trash') }}</a>
                          </li>
                          <li>
                            <a class="sign" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">{{ __('site.menu_item_logout') }}</a>
                            {{ Form::open(['method' => 'POST','route' => ['logout'],'style'=>'display: none;','id'=>'logout-form']) }}
                              {{ csrf_field() }}
                            {{ Form::close() }}
                          </li>
                        </ul>
                      </ul>
                    @else
                      <a href="#" class="dropdown-toggle author-icon" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-sign-in author-icon" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <ul class="nav nav-menu">
                          <li>
                            <a class="sign" href="{{ route('login') }}">{{ __('site.menu_item_login') }}</a>
                          </li>
                          <li>
                            <a class="sign" href="{{ route('register') }}">{{ __('site.menu_item_registration') }}</a>
                          </li>
                        </ul>
                      </ul><!-- /Dropdown-menu -->
                    @endauth
                  </div>
                </li><!-- /Dropdown -->
              </div><!-- /Author -->
            @endif


          </div>
        </div>
      </div><!-- header-top -->
      
      <!--========================== Header-Nav ================================-->
      <div class="header-nav">
        <nav class="navbar navbar-default">
          <div class="container">
            <p class="pull-left visible-xs">
              <button type="button" class="navbar-toggle" data-toggle="offcanvas">
                <i class="fa fa-long-arrow-right"></i>
                <i class="fa fa-long-arrow-left"></i>
              </button>
            </p>
            <div class="social-nav center-block visible-xs">
              <li><a href="https://vk.com/test_profile"><i class="fa fa-vk vk"></i></a></li>
            </div>
            <!--toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('home') }}">{{ __('site.menu_item_home') }}</a></li>
                <li><a href="{{ route('about') }}">{{ __('site.menu_item_about') }}</a></li>
                @auth
                  <li><a href="{{ route('articles.create') }}">{{ __('site.menu_item_create') }}</a></li>
                @endauth
              </ul>
              <ul class="nav navbar-nav navbar-right hidden-xs">
                <li><a href="https://vk.com/test_profile"><i class="fa fa-vk vk"></i></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-->
        </nav>
      </div><!-- Header-Nav -->
    </header>
    <!--========================== Contant-Area================================-->
    <div class="contant-area">
      <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <!--========================== main-content ================================-->
        <div class="col-md-9 col-sm-12 col-xs-12">

          @if (count($errors) > 0)
            <div class="alert alert-warning">
                
              @foreach ($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
     
            </div>
          @endif
          
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          
          @if (session('error'))
            <div class="alert alert-warning">
              {{ session('error') }}
            </div>
          @endif


          @yield('content')
        </div>
        <!--========================== Right-Sidebar ================================-->
        <div class="col-md-3 col-sm-12 col-xs-12">
          @yield('right_sidebar')
        </div>
      </div>
      </div><!-- Container -->
    </div><!-- Content-area -->

    @include('footer')
  </div><!-- /Wrapper -->
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src ="{{asset('js/custom.js')}}"></script>
    <script src ="{{asset('vendor/bootstrap-select-1.13.2/js/bootstrap-select.js')}}"></script>
    <script src ="{{asset('js/myscript.js')}}"></script>
  </script>
  </body>
</html>