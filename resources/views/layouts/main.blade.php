<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Registrar Appointment System" >


    <link rel="icon" href="{{ asset('img/logo1.png')}}" />
    <link rel="manifest" href="{{ asset('manifest.webmanifest')}}" />

    <title>@yield('title', 'Appointment App')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link  href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link  href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/queries.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/deafult.css') }}" rel="stylesheet">





</head>
<body>

    @yield('navbar')
    <nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand pl-5">
                <img class="logo" alt="SPC logo" src="img/logo.png"/>
            </a>
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto main-nav-list">
                    <li><a class="nav-item main-nav-link nav-cta" href="">Appointment</a></li>
                    <li><a class="nav-item main-nav-link" href="{{ route('user-profile-information.edit')}}">Profile</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn nav-item main-nav-link">Logout</button>
                  </ul>
            </div>
        </div>
    </nav>
   @show

      @yield('content')






    <script src="{{ asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
