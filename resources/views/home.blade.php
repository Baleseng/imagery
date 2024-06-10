@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')
      
<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

@section('content')

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
        
        <div class="col-xxl-12 my-3 bg-white p-3 ">
            <div class="bg-white text-mute text-center my-3"> 
                
                <h1>Popular visual content </h1>
                <small>Unique hand-picked photos, affordable HD and 4K video clips, editable vectors—and much, much more. You'll find it all, right here.</small>
                   
                <div class="row">
                    <div class="col-xxl-3 col-xl-12 col-lg-7 col-md-7 col-17 my-3 overflow-hidden" style="height:290px">
                        <img class="col-12 border" src="{{ url('storage/images/1708595005_InstagramCapture_11611916-a9c7-42b8-8510-e89e6f4c06e2.jpg') }}"/>
                    </div>
                    <div class="col-xxl-3 col-xl-12 col-lg-7 col-md-7 col-17 my-3 overflow-hidden" style="height:290px">
                        <img class="col-12 border" src="{{ url('storage/images/1709221080_-MG-6967.jpg') }}"/>
                    </div>
                    <div class="col-xxl-3 col-xl-12 col-lg-7 col-md-7 col-17 my-3 overflow-hidden" style="height:290px">
                        <img class="col-12 border" src="{{ url('storage/images/1708593630_InstagramCapture_0afd206c-51de-4ca8-a137-6f5e8ac86daf.jpg') }}"/>
                    </div>
                    <div class="col-xxl-3 col-xl-12 col-lg-7 col-md-7 col-17 my-3 overflow-hidden" style="height:290px">
                        <img class="col-12 border" src="{{ url('storage/images/1708694269_InstagramCapture_c419fbb4-83c7-40a4-b72d-8eec0aab3827.jpg') }}"/>
                    </div>
                </div>        
                    
            </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 my-3 p-3 bg-light">
            <div class="text-mute text-center mb-3"> 
                <h1>What we offer</h1>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 " style="max-height:460px;">
                    <p class="text-mute">As the original stock content site created by creatives for creatives, we get you. You need unique images and videos that connect with your audience, at prices that fit your budget. We've got all that—and more.</p>
                    <div class="list-group">
                        <div class="bg-light list-group-item list-group-item-action text-mute border-0" aria-current="true">
                            <div class="">
                                <h5 class="mb-1">Exclusive videos and images</h5>
                                <p class="mb-1">Visuals you won't find elsewhere, from global artists who work only with us.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light list-group-item list-group-item-action text-mute border-0">
                            <div class="">
                                <h5 class="mb-1">AI-powered search</h5>
                                <p class="mb-1">Everything you want, without looking at page after page of visuals.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light list-group-item list-group-item-action text-mute border-0">
                            <div class="">
                                <h5 class="mb-1">Affordable pricing</h5>
                                <p class="mb-1">Value and premium-quality—never sacrifice one for the other.</p>
                                <a href="" class="text-mute">Read more</a>
                            </div>
                        </div>
                        <div class="bg-light list-group-item list-group-item-action text-mute border-0">
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
                    <div class="col-12">
                            
                        <a href="{{ url('/catergories/abstract') }}" class="m-1 btn btn-outline-primary">Abstract</a>
                   
                        <a href="{{ url('/catergories/animals&wildlife') }}" class="m-1 btn btn-outline-primary">Animals and Wildlife</a>
                    
                        <a href="{{ url('/catergories/') }}" class="m-1 btn btn-outline-primary">Arts</a>
                    
                        <a href="{{ url('/catergories/backgrounds&textures') }}" class="m-1 btn btn-outline-primary">Backgrounds and Textures</a>
                   
                        <a href="{{ url('/catergories/beauty&fashion') }}" class="m-1 btn btn-outline-primary">Beauty and Fashion</a>
                    
                        <a href="{{ url('/catergories/buildings&landmarks') }}" class="m-1 btn btn-outline-primary">Buildings and Landmarks</a>
                   
                        <a href="{{ url('/catergories/business&finance') }}" class="m-1 btn btn-outline-primary">Business and Finance</a>

                        <a href="{{ url('/catergories/celebrities') }}" class="m-1 btn btn-outline-primary">Celebrities</a>
                   
                        <a href="{{ url('/catergories/education') }}" class="m-1 btn btn-outline-primary">Education</a>
                   
                        <a href="{{ url('/catergories/food&drink') }}" class="m-1 btn btn-outline-primary">Food and drink</a>
                    
                        <a href="{{ url('/catergories/healthcare&medical') }}" class="m-1 btn btn-outline-primary">Healthcare and Medical</a>
                    
                        <a href="{{ url('/catergories/holidays') }}" class="m-1 btn btn-outline-primary">Holidays</a>
                    
                        <a href="{{ url('/catergories/industrial') }}" class="m-1 btn btn-outline-primary">Industrial</a>
                    
                        <a href="{{ url('/catergories/interiors') }}" class="m-1 btn btn-outline-primary">Interiors</a>
                   
                        <a href="{{ url('/catergories/miscellaneous') }}" class="m-1 btn btn-outline-primary">Miscellaneous</a>
                    
                        <a href="{{ url('/catergories/nature') }}" class="m-1 btn btn-outline-primary">Nature</a>
                    
                        <a href="{{ url('/catergories/objects') }}" class="m-1 btn btn-outline-primary">Objects</a>
                    
                        <a href="{{ url('/catergories/parks&outdoor') }}" class="m-1 btn btn-outline-primary">Parks and Outdoor</a>
                    
                        <a href="{{ url('/catergories/people') }}" class="m-1 btn btn-outline-primary">People</a>
                    
                        <a href="{{ url('/catergories/religion') }}" class="m-1 btn btn-outline-primary">Religion</a>
                    
                        <a href="{{ url('/catergories/science') }}" class="m-1 btn btn-outline-primary">Science</a>
                    
                        <a href="{{ url('/catergories/signs&symbols') }}" class="m-1 btn btn-outline-primary">Signs and Symbols</a>
                    
                        <a href="{{ url('/catergories/sports&recreation') }}" class="m-1 btn btn-outline-primary">Sports and Recreation</a>
                    
                        <a href="{{ url('/catergories/technology') }}" class="m-1 btn btn-outline-primary">Technology</a>
                    
                        <a href="{{ url('/catergories/transportation') }}" class="m-1 btn btn-outline-primary">Transportation</a>
                    
                        <a href="{{ url('/catergories/vintage') }}" class="m-1 btn btn-outline-primary">Vintage</a>
                            
                    </div>
                    
                </div>

            </div>
        </div>
        
        <div class="col-xxl-12">
            <div class="bg-light text-mute text-center mb-3"> 
                <h1>Latest Feature</h1>
            </div>
            <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
                    @foreach ($subs as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
                    @foreach ($paid as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
                    @foreach ($free as $content)
                        @include('includes.users.file-cards')
                    @endforeach
                </div>

                
                
            </div>
        </div>

    </div>
</div>

@endsection


<script>
        let text = document.getElementById("demo").innerHTML; 
        document.getElementById("demo").innerHTML = text.replace("commercial", "cart-shopping");
        </script>
