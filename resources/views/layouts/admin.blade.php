<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
     
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body class="roboto-regular">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed top-0 z-3">
            <div class="container-fluid">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-2">
                    <a href="{{ url('/'.$url) }}"><img src="{{ URL::asset('images/logo.png') }}" style="width:50%;"></a>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search image">
                        <!--<div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>-->
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
                                <a href="{{ url('/'.$url) }}" class="text-secondary"><i class="fa fa-home"></i></a>
                            </li>

                            <li class="list-group-item text-secondary border-0">
                                <a href="{{ url('/') }}" class="text-secondary">
                                    <i class="fa-solid fa-bell"></i>
                                </a>
                            </li>
                            
                            <li class="list-group-item text-secondary dropdown border-0">
                                <a id="navbarDropdown" class="nav-link ]" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-user"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url($url.'/profile/'.Auth::user()->id) }}"> 
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                    </a>

                                    
                                    
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

        <main class="py-4">
            @yield('content')
             
            <script type="text/javascript">
                Highcharts.chart('photo-container', {
                    chart: {type: 'column'},
                    title: {text: 'Annual Perfomance'},
                    xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']},
                    credits: {enabled: true},
                    plotOptions: {
                        column: {borderRadius: '25%'}
                    },
                    series: [
                        {name: 'Views',data: [2, 1, 4, 2, 2, 1, 3, 4, 1, 2, 1, 1]},
                        {name: 'Downloads', data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}, 
                        {name: 'Shared',data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}
                    ]
                });
            </script>

        </main>
        <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>    
</div>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
