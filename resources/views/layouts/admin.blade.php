<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed top-0 z-3">
            <div class="container-fluid">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-2">
                    <a href="{{ url('/creator') }}"><img src="{{ URL::asset('images/logo.png') }}" style="width:50%;"></a>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search image">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-6 d-flex flex-row-reverse">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button type="button" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#mySignup">Sign up</button>
                            @endif

                            @if (Route::has('register'))
                            <button type="button" class="btn btn-primary ml-3" data-bs-toggle="modal" data-bs-target="#myLogin">Login</button>
                            @endif
                        @else
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item text-secondary border-0">
                                <a href="{{ url('/creator') }}" class="text-secondary"><i class="fa fa-home"></i></a>
                            </li>
                            
                            <li class="list-group-item text-secondary dropdown border-0">
                                <a id="navbarDropdown" class="nav-link ]" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url('/creator/profile') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa fa-user"></i> 
                                    {{ Auth::user()->name }}
                                    </a>

                                    <a class="dropdown-item" href=""><i class="fa fa-camera"></i> Upload Profile Picture</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-file-text"></i> Create / Manage Page</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-expeditedssl"></i> Security / Privacy</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-connectdevelop"></i> Setting A.I</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-bell-o"></i> Setting Notification</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-envelope-open-o"></i> Setting Message</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-user-plus"></i> Setting Requests</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-sitemap"></i> Sitemap</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-dashcube"></i> Feedback</a>
                                    <a class="dropdown-item" href=""><i class="fa fa-question-circle-o"></i> Help</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </div>
            </div>

            
        </nav>

        <!-- The Modal -->
                <div class="modal" id="myLogin">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Log in</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row m-15">

                                        <div class="card col text-center mx-1">
                                            <a href="{{ url('login/') }}" class="fs-6">
                                                <i class="fa fa-user"></i><br/>
                                                <span class="">User</span>
                                            </a>
                                        </div> 
                                        <div class="card col text-center mx-1">
                                            <a href="{{ url('login/creator') }}" class="fs-6">
                                                <i class="fa fa-user"></i><br/>
                                                <span class="">Contributor</span>
                                            </a>
                                        </div>
                                        <div class="card col text-center mx-1">
                                            <a href="{{ url('login/admin') }}" class="fs-6">
                                                <i class="fa fa-user"></i><br/>
                                                <span class="">Admin</span>
                                            </a>
                                        </div>
                                    </div> 
                                </div>

                                <div class="container">
                                    <div class="row">
                                         
                                    </div> 
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal" id="mySignup">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sign up</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row m-15">
                                        <div class="col text-center">
                                            <a href="{{ url('register/') }}" class="fs-4">
                                                <i class="fa fa-user"></i>
                                                <div class="text-center">User</div>
                                            </a>
                                        </div> 
                                        <div class="col text-center">
                                            <a href="{{ url('register/creator') }}" class="fs-4">
                                                <i class="fa fa-user"></i>
                                                <div class="text-center">Contributor</div>
                                            </a>
                                        </div>
                                        <div class="col text-center">
                                            <a href="{{ url('register/admin') }}" class="fs-4">
                                                <i class="fa fa-user"></i>
                                                <div class="text-center">Admin</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
