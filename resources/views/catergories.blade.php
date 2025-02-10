@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')



@section('content')

<div class="mt-5 border bg-black bg-gradient container-fluid">
  @include('includes.users.file-search-field')
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="col-xxl-12">
    <div class="bg-light text-mute text-center mb-3"> <h1>Latest Feature</h1></div>
    <div class="row">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
            @foreach ($holidays as $content)
            <div class="text-light w-100 text-decoration-none">
                <div class="col-12 position-relative overflow-hidden hover my-2">
                    
                    <img src="{{ url('storage/images/'.$content->file_name) }}" class="col-12 images" />

                    <div class="middle">

                        <a href="{{ url('/file/'.$content->id) }}" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
                            
                        
                            <h5 class="w-75 mb-1 p-2 text-truncate roboto-light">{{ $content->title }}</h5>
                            
                        
                        </a>

                        <div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
                        <a href="https://www.google.com/" class="p-3 fs-6 text-light text-decoration-none"> 
                            <i class="fa-solid fa-layer-group"></i> Similar
                        </a>
                    </div>

                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
   
@endsection


