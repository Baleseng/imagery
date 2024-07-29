<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

 <!-- Scripts   
    <style>
        {!! Vite::content('resources/sass/app.scss') !!}
    </style>
    <script>
        {!! Vite::content('resources/js/app.js') !!}
    </script>
-->     


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

     

</head>
<body class="roboto-regular">
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed top-0 z-3">
            <div class="container-fluid">
                
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-4">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('images/logo.png') }}" class="col-xxl-7 col-12"></a>
                </div>
                
                <!-- Right Side Of Navbar -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12 mt-lg-0 mt-2 d-flex flex-row-reverse">    
                    <!-- Authentication Links -->
                    @guest

                        @if (Route::has('login'))
                        <button type="button" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#mySignup">Sign up</button>
                        @endif

                        @if (Route::has('register'))
                        <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#myLogin">Login</button>
                        @endif

                        <a href="{{ url('login/creator') }}" class="btn border">
                            Submit a photo
                        </a>
                          

                    @else
                    <ul class="list-group list-group-horizontal-md d-flex flex-row">

                    
                        <li class="list-group-item border-0 bg-white" style="width:3.75em;">     
                            <a href="{{ route('cart.list') }}" class="position-positive text-secondary">
                                <i class="fa-solid fa-cart-shopping"></i> 
                                <span class="position-absolute px-1" style="bottom:5px;">{{ Cart::getTotalQuantity()}}</span>
                            </a>
                        </li>

                        <li class="list-group-item border-0 bg-white" style="width:3.75em;">
                            <a href="{{ url('/') }}"  class="position-positive text-secondary">
                                <i class="fa-solid fa-bell"></i>
                                <span class="position-absolute px-1" style="bottom:5px;">0</span>
                            </a>
                        </li> 

                        <li class="list-group-item border-0 bg-white">
                            <a href="{{ url('/feed') }}" class="text-secondary">
                                <i class="fa-solid fa-share-from-square"></i>
                            </a>
                        </li>

                        <li class="list-group-item dropdown border-0 bg-white">
                            <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="text-secondary">
                                <i class="fa-solid fa-user"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end text-secondary" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item link-secondary" href="{{ url('/profile') }}"> <i class="fa fa-user"></i> 
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

                        <li class="list-group-item rounded-0 border py-1 mx-2 bg-white">
                            <a href="{{ url('subscription') }}" class="text-secondary text-decoration-none">
                                <i class="fa-solid fa-credit-card"></i> Pricing
                            </a>
                        </li>

                        <li class="list-group-item rounded-0 border py-1 mx-2 bg-white">
                            <a href="{{ url('subscription') }}" class="text-secondary text-decoration-none">
                                 <i class="fa-solid fa-wand-magic-sparkles"></i> AI Generate
                            </a>
                        </li>                       
                         
                    </ul>
                    @endguest
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
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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

                </div>
            </div>
        </div>

        
        
        <main class="py-4" style="min-height:50rem;">
            @yield('content')
        </main>

        <footer class="container-fluid bg-black bg-gradient p-5">
            <div class="row">
              <div class="col-6 col-md-2 mb-3">
                <h5 class="text-light">Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                <h5 class="text-light">Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                <h5 class="text-light">Section</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
              </div>

              <div class="col-md-5 offset-md-1 mb-3 text-light">
                <form>
                  <h5>Subscribe to our newsletter</h5>
                  <p>Monthly digest of what's new and exciting from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-light">
              <p>© 2022 Company, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><i class=""></a></li>
                <li class="ms-3"><a class="link-dark" href="#"></a></li>
                <li class="ms-3"><a class="link-dark" href="#"></a></li>
              </ul>
            </div>
        </footer>

    </div>

    
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
