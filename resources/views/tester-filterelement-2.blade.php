@extends('layouts.app')

@section('description', '')
@section('keywords', '')

<style>
.filterDiv {
  float: left;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
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

<div class="container md-auto position-relative">

<div class="col-xxl-12 my-3 py-3">
    <div class="bg-light text-mute text-center mb-3"> 
        <h1>Browse Catergories</h1>
        <div class="row">
            <div class="col-12" id="myBtnContainer">
                <button class="m-1 btn btn-outline-primary" onclick="filterSelection('all')"> Show all</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Abstract')">Abstract</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Animals&Wildlife')">Animals and Wildlife</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Arts')">Arts</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Backgrounds/Textures')">Backgrounds and Textures</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Beauty&Fashion')">Beauty and Fashion</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Buildings&Landmarks')">Buildings and Landmarks</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Business&Finance')">Business and Finance</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Celebrities')">Celebrities</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Education')">Education</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Food&drink')">Food and drink</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Healthcare&Medical')">Healthcare and Medical</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Holidays')">Holidays</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Industrial')">Industrial</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Interiors')">Interiors</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Miscellaneous')">Miscellaneous</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Nature')">Nature</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Objects')">Objects</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Parks&Outdoor')">Parks and Outdoor</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('People')">People</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Religion')">Religion</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Science')">Science</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Signs&Symbols')">Signs and Symbols</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Sports&Recreation')">Sports and Recreation</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Technology')">Technology</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Transportation')">Transportation</button>
                        <button class="m-1 btn btn-outline-primary" onclick="filterSelection('Vintage')">Vintage</button>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-12 my-3 py-3">
    <div class="bg-light text-mute text-center mb-3"> <h1>Latest Feature</h1></div>
    <div class="row">

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">

            <!-- <div class="filterDiv cars">BMW</div>
            <div class="filterDiv colors fruits">Orange</div>
            <div class="filterDiv cars">Volvo</div>
            <div class="filterDiv colors">Red</div>
            <div class="filterDiv cars">Ford</div>
            <div class="filterDiv colors">Blue</div>
            <div class="filterDiv animals">Cat</div>
            <div class="filterDiv animals">Dog</div>
            <div class="filterDiv fruits">Melon</div>
            <div class="filterDiv fruits animals">Kiwi</div>
            <div class="filterDiv fruits">Banana</div>
            <div class="filterDiv fruits">Lemon</div>
            <div class="filterDiv animals">Cow</div> -->
            
            @foreach ($subs as $content)
            <div class="filterDiv {{ $content->category }} text-light w-100 text-decoration-none">
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
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
            @foreach ($free as $content)
            <div class="filterDiv {{ $content->category }} text-light w-100 text-decoration-none">
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
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 px-1">
            @foreach ($paid as $content)
            <div class="filterDiv {{ $content->category }} text-light w-100 text-decoration-none">
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
</div>

@section('content')

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


@endsection


