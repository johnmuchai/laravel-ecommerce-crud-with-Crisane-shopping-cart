<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/side-menu.css')}}">
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.2.1.js')}}"></script>
  
</head>
<body>
    <div  id="app">
       @include('_includes.navigation')
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-3">
                   @include('_includes.side-menu')
                </div>
                <div class="col-md-9">
                    @include('_includes.messages')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $("navbarDropdown").hover(function(){
            $(this).addClass("dropdown-menu");
        }, function(){
            $(this).removeClass("dropdown-menu");
        });

      
    }); 
    
    
    </script>
</body>
</html>
