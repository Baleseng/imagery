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

    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    
</head>
<body class="roboto-regular">
    <div id="app">

        <nav class="navbar flex-row position-fixed top-0 z-3 navbar-light bg-white shadow-sm px-3">
            
            <div class="col-xxl-2 col-xl-3 col-lg-2 col-md-3 col-5 my-xxl-0 my-xl-0 my-lg-0 my-md-0 my-3 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-1">
                <a href="{{ url('/home') }}"><img src="{{ URL::asset('images/logo.png') }}" class="col-12"></a>
            </div>
                
            <div class="col-xxl-7 col-xl-6 col-lg-7 col-md-4 col-6">
                <div class="d-flex flex-row-reverse">
                    
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6 mx-2">
                        <div class="text-center py-xxl-2 py-xl-2 py-lg-2 py-md-2 py-2 bg-primary border-0 rounded-2">
                            <a href="{{ url('subscription') }}" class="text-light text-decoration-none">
                                <i class="fa-solid fa-credit-card"></i> Price
                            </a>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="text-center py-xxl-2 py-xl-2 py-lg-2 py-md-2 py-2 bg-primary border-0 rounded-2">
                            <a href="{{ url('ai-img-gen') }}" class="text-light text-decoration-none">
                                <i class="fa-solid fa-wand-magic-sparkles"></i> AI-Gen
                            </a>
                        </div>
                    </div>

                </div>
            </div>
                
            <!-- Right Side Of Navbar -->
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-3 col-12">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    <button type="button" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#mySignup">Sign up</button>
                    @endif
                    @if (Route::has('register'))
                    <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#myLogin">Login</button>
                    @endif
                    <a href="{{ url('login/creator') }}" class="btn border">Submit a photo</a>      
                @else
                <div class="d-flex flex-wrap">
                    <div class="col-xxl-3 col-12">
                        <ul class="list-group list-group-horizontal">  
                            
                            <li class="list-group-item border-0 bg-light col-xxl-12 col-3">     
                                <a href="{{ route('cart') }}" class="position-positive text-secondary">
                                    <i class="fa-solid fa-cart-shopping"></i> 
                                    <!--<span class="position-absolute px-1">{{ Cart::getTotalQuantity()}}</span>-->
                                    <span class="position-absolute px-1">
                                        {{ auth()->check() ? auth()->user()->cartItems->sum('file_quantity') : 0 }}
                                    </span>
                                </a>
                            </li>

                            <li class="list-group-item border-0 bg-light col-xxl-12 col-3">
                                <a href="{{ url('/') }}"  class="position-positive text-secondary">
                                    <i class="fa-solid fa-bell"></i>
                                    <span class="position-absolute px-1">0</span>
                                </a>
                            </li> 
                            <li class="list-group-item border-0 bg-light col-xxl-8 col-3">
                                <a href="{{ url('/feed') }}" class="text-secondary text-center" style="display:block;">
                                    <i class="fa-solid fa-share-from-square"></i>
                                </a>
                            </li>
                            <li class="list-group-item dropdown border-0 bg-light text-center col-xxl-8 col-3">
                                <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="text-secondary">
                                    <i class="fa-solid fa-user"></i><i class="fa-solid fa-angle-down"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-secondary" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item link-secondary" href="{{ url('/profile') }}"> <i class="fa fa-user"></i> 
                                    {{ Auth::user()->name }}
                                    </a>
                                
                                    <a class="dropdown-item link-secondary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endguest
        
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

                                <a href="{{ url('login/') }}" class="btn btn-outline-primary col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-12">
                                    <i class="fa fa-user"></i><br/>
                                    <span class="">User</span>
                                </a>
                                <a href="{{ url('login/creator') }}" class="btn btn-outline-primary col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-12 m-xxl-5 m-xl-5 m-lg-5 m-md-5 m-sm-5">
                                    <i class="fa fa-user"></i><br/>
                                    <span class="">Contributor</span>
                                </a>
                                <a href="{{ url('login/admin') }}" class=" btn btn-outline-primary col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-12">
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
<!-- Bootstrap JS and dependencies -->
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>-->
</body>
</html>
