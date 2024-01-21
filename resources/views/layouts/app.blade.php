<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed top-0 z-3">
            <div class="container-fluid">
                
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-2">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('images/logo.png') }}" style="width:50%;"></a>
                </div>
                
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-0">
                    <form class="form-inline">
                        <input class="form-control" type="search" id="search_field"  placeholder="Search image" aria-label="Search">
                    </form>    
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="col-xxl-7 col-xl-6 col-lg-8 col-md-8 col-6 d-flex flex-row-reverse">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button type="button" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#mySignup">Sign up</button>
                            @endif

                            @if (Route::has('register'))
                            <button type="button" class="btn btn-primary ml-3" data-bs-toggle="modal" data-bs-target="#myLogin">Login</button>
                            @endif
                        @else
                        <ul class="nav fs-6 ">
                            <li class="nav-item rounded-0 border-0">
                                <button type="button" class="nav-link link-secondary px-2" data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="total-count"></span>
                                </button>
                            </li>
                            
                            <li class="nav-item text-secondary border-0">
                                <a href="{{ url('/') }}" class="nav-link link-secondary px-2">
                                    <i class="fa-solid fa-bell"></i>
                                </a>
                            </li>
                            
                            <li class="nav-item text-secondary border-0">
                                <a href="{{ url('/feed') }}" class="nav-link link-secondary px-2">
                                    <i class="fa-solid fa-share-from-square"></i>
                                </a>
                            </li>
                            
                            <li class="nav-item text-secondary dropdown border-0">
                                <a id="navbarDropdown" class="nav-link link-secondary px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-solid fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-secondary" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item link-secondary" href="{{ url('/creator/profile') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa fa-user"></i> 
                                    {{ Auth::user()->name }}
                                    </a>

                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-camera"></i> Upload Profile Picture</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-file-text"></i> Create / Manage Page</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-expeditedssl"></i> Security / Privacy</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-connectdevelop"></i> Setting A.I</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-bell-o"></i> Setting Notification</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-envelope-open-o"></i> Setting Message</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa-solid fa-gear"></i> Setting Requests</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-sitemap"></i> Sitemap</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-dashcube"></i> Feedback</a>
                                    <a class="dropdown-item link-secondary" href=""><i class="fa fa-question-circle-o"></i> Help</a>
                                    
                                    <a class="dropdown-item link-secondary" href="{{ route('logout') }}"
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
                <div class="modal fade" id="myLogin">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Log in</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="mx-auto col-12" role="group">

                                        
                                        <a href="{{ url('login/') }}" class="btn btn-outline-primary col-3 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">User</span>
                                        </a>
                                    
                                    
                                        <a href="{{ url('login/creator') }}" class="btn btn-outline-primary col-3 mx-5 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">Contributor</span>
                                        </a>
                                    
                                        <a href="{{ url('login/admin') }}" class=" btn btn-outline-primary col-3 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">Admin</span>
                                        </a>
                                        
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
                <div class="modal fade" id="mySignup">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sign up</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="mx-auto col-12" role="group">

                                        
                                        <a href="{{ url('register/') }}" class="btn btn-outline-primary col-3 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">User</span>
                                        </a>
                                    
                                    
                                        <a href="{{ url('register/creator') }}" class="btn btn-outline-primary col-3 mx-5 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">Contributor</span>
                                        </a>
                                    
                                        <a href="{{ url('register/admin') }}" class=" btn btn-outline-primary col-3 py-4">
                                            <i class="fa fa-user"></i><br/>
                                            <span class="">Admin</span>
                                        </a>
                                        
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

        <main class="py-4" style="min-height:50rem;">
            @yield('content')

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                       <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Your Cart</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                          </button>
                       </div>
                       <div class="modal-body">
                          <table class="show-cart table"></table>
                          <div class="grand-total">Total price: ZAR<span class="total-cart"></span></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <!-- <button type="button" class="btn btn-danger clear-all">Clear All</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>

         <div class="mt-5 p-4 bg-dark text-white text-center col-lg-12">
            <p>Footer</p>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://imagery.test:5173/resources/js/cart.js"></script>



</body>
</html>
