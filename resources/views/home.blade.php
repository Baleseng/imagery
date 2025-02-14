@extends('layouts.app')

@section('description', '')
@section('keywords', '')


@section('title',  '')
      
@section('content')

<div class="search-container border bg-black bg-gradient container-fluid py-3">
  @include('includes.users.file-search-field')
</div>

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
        
        <div class="col-xxl-12 my-3 bg-white p-3 ">
            <div class="bg-white text-mute text-center my-3"> 
                
                <h1>Popular visual content </h1>
                <small>Unique hand-picked photos, affordable HD and 4K video clips, editable vectors—and much, much more. You'll find it all, right here.</small>
                   
                <div class="row">
                    
                        @foreach ($popu as $content)
                        <div class="col-xxl-3 col-xl-12 col-lg-7 col-md-7 col-17 my-3 overflow-hidden" style="height:290px">
                            <img class="col-12 border" src="{{ url('storage/images/1708595005_InstagramCapture_11611916-a9c7-42b8-8510-e89e6f4c06e2.jpg') }}"/>
                        </div>
                        @endforeach

                
                </div>           
            </div>

        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 my-3 p-3 bg-light">
            <div class="text-mute text-center mb-3"> 
                <h1>What we offer</h1>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                    <p class="text-mute">As the original stock content site created by creatives for creatives, we get you. You need unique images and videos that connect with your audience, at prices that fit your budget. We've got all that—and more.</p>
                    <div class="list-group">
                        <div class="bg-light text-mute border-0" aria-current="true">
                            <div class="">
                                <h5 class="mb-1">Exclusive videos and images</h5>
                                <p class="mb-1">Visuals you won't find elsewhere, from global artists who work only with us.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light text-mute border-0">
                            <div class="">
                                <h5 class="mb-1">AI-powered search</h5>
                                <p class="mb-1">Everything you want, without looking at page after page of visuals.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light  text-mute border-0">
                            <div class="">
                                <h5 class="mb-1">Affordable pricing</h5>
                                <p class="mb-1">Value and premium-quality—never sacrifice one for the other.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light text-mute border-0">
                            <div class="">
                                <h5 class="mb-1">Worry-free licensing</h5>
                                <p class="mb-1">Commercial-use content backed by industry-leading coverage.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 position-relative" style="max-height:460px; overflow:hidden;">
                     <img class="col-12 position-absolute top-50 start-50 translate-middle" src="{{ url('storage/images/promotional.jpg') }}"/>
                 </div>
            </div>
        </div>

        <div class="col-xxl-12 my-3 py-3">
            <div class="bg-light text-mute text-center mb-3"> 
                <h1>Browse Catergories</h1>
                <div class="row">
                    <div class="col-12" id="myBtnContainer">

                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('all')"> Show all</button>
                        @foreach ($categories as $button)
                            <button class="m-1 btn btn-outline-primary" onclick="filterSelection('{{ $button->category }}')">{{ $button->category }}</button>
                        @endforeach
                        
                            
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="col-xxl-12">
        
            <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 px-1">
                    @foreach ($subs as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 px-1">
                    @foreach ($paid as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 px-1">
                    @foreach ($free as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>

@endsection


