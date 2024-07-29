@extends('layouts.app')

@section('description', '')
@section('keywords', '')

<style type="text/css">
.filterDiv {
  display: none;
}
.show {
  display: block;
}
</style>

@section('title',  '')
      
<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

@section('content')

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
        
        <!--<div class="col-xxl-12 my-3 bg-white p-3 ">
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
        </div>-->

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
                    <div class="col-12" id="myBtnContainer">
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('all')"> Show all</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Abstract')">Abstract</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Animals&Wildlife')">Animals and Wildlife</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Arts')">Arts</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Backgrounds/Textures')">Backgrounds and Textures</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Beauty&Fashion')">Beauty and Fashion</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Buildings&Landmarks')">Buildings and Landmarks</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Business&Finance')">Business and Finance</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Celebrities')">Celebrities</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Education')">Education</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Food&drink')">Food and drink</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Healthcare&Medical')">Healthcare and Medical</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Holidays')">Holidays</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Industrial')">Industrial</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Interiors')">Interiors</button> -->
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Miscellaneous')">Miscellaneous</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Nature')">Nature</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Objects')">Objects</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Parks&Outdoor')">Parks and Outdoor</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('People')">People</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Religion')">Religion</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Science')">Science</button>
                        <!-- <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Signs&Symbols')">Signs and Symbols</button> -->
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Sports&Recreation')">Sports and Recreation</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Technology')">Technology</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Transportation')">Transportation</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Vintage')">Vintage</button>
                            
                    </div>    
                </div>

            </div>
        </div>
        
        <div class="col-xxl-12">
        
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

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
