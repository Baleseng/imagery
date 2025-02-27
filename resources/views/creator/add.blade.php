@extends('layouts.admin')

@section('description', '')
@section('keywords', '')

@section('title',  '')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid" style="position: relative; top:3rem;">
    <div class="row justify-content-center">
        
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-0 position-sticky" style="top:4em;">
                <a href="{{ url('/creator/add') }}" class="btn btn-primary mb-2" data-bs-target="#upLoad" id="demo" style="width:100%;"><i class="fa-solid fa-upload"></i> Upload</a>
                @include('includes.admin.file-navPagesbtn')
           </div>
        </div>

        <div class="col-9">
            <div class="row d-flex">
                <div class="col-12 overflow-auto">
                    <div class="card rounded-0">
                        <div class="card-body">
                            
                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id"/>
                            
                                <input type="hidden" value="review" name="file_status"/>        

                                <!--<input type="hidden" name="file" value="https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464__340.jpg">-->


                                <div class="row d-flex">
                                    <div class="col-6">
                                        <h4 class="text-center mb-5">Upload Your File</h4>
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success"><strong>{{ $message }}</strong></div>
                                        @endif
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div id="drop-area" class="border rounded position-relative" style="min-height: 200px; cursor: pointer;">
                                                    
                                                    <div class="opacity-50 text-center position-absolute top-50 start-50 translate-middle">
                                                        <label for="selectImage" class="custom-file-input form-control text-secondary ">
                                                            <i class="fa-solid fa-cloud-arrow-up fs-1"></i>
                                                            <div class="">upload file</div>
                                                        </label>
                                                        <input type="file" name="file" id="selectImage" hidden>
                                                    </div>

                                                    <div class="img">
                                                        <img id="preview" src="#" alt="your image" class="rounded-1" style="display:none; width: 100%; height:auto;" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="vr mx-4 p-0"></div>

                                    <div class="col-5">
                                        
                                        <div class="mb-3">
                                            <label for="imageTypeCheckboxInput" class="form-label fw-bold d-block">File Type</label>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                
                                                <input type="radio" class="btn-check" name="file_type" value="image"  id="btnRadio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnRadio1">Photo</label>

                                                <input type="radio" class="btn-check" name="file_type" value="video" id="btnRadio2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio2">Video</label>

                                                <input type="radio" class="btn-check" name="file_type" value="audio" id="btnRadio3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio3">Audio</label>

                                            </div>
                                        </div> 

                                        <div class="mb-3">
                                            <label for="usageCheckboxInput" class="form-label fw-bold d-block">Usage</label>
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" name="file_usage" value="licensing" id="option3" autocomplete="off" checked onclick="showCommercial2()">
                                                <label class="btn btn-outline-primary" for="option3">Licensing</label>

                                                <input type="radio" class="btn-check" name="file_usage" value="paiddownload" id="option4" autocomplete="off" onclick="showCommercial1()">
                                                <label class="btn btn-outline-primary" for="option4">Pay-to-Download</label>

                                                <input type="radio" class="btn-check" name="file_usage" value="freedownload" id="option5" autocomplete="off" onclick="showCommercial0()">
                                                <label class="btn btn-outline-primary" for="option5">Free-Download</label>
                                            </div>
                                            <div>*Subject to administrator approval</div>
                                        </div>



                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="file_title" placeholder="Keywords">
                                            <label for="floatingInput">File Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="file_description" value="" placeholder="Description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="file_category" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
                                                <option value="">Select Catergory</option>
                                                <option value="Abstract">Abstract</option>
                                                <option value="Animals&Wildlife">Animals/Wildlife</option>
                                                <option value="Arts">Arts</option>
                                                <option value="Backgrounds&Textures">Backgrounds/Textures</option>
                                                <option value="Beauty&Fashion">Beauty/Fashion</option>
                                                <option value="Buildings&Landmarks">Buildings/Landmarks</option>
                                                <option value="Business&Finance">Business/Finance</option>
                                                <option value="Celebrities">Celebrities</option>
                                                <option value="Education">Education</option>
                                                <option value="Food&drink">Food/Drink</option>
                                                <option value="Healthcare&Medical">Healthcare/Medical</option>
                                                <option value="Holidays">Holidays</option>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Interiors">Interiors</option>
                                                <option value="Miscellaneous">Miscellaneous</option>
                                                <option value="Nature">Nature</option>
                                                <option value="Objects">Objects</option>
                                                <option value="Parks&Outdoor">Parks/Outdoor</option>
                                                <option value="People">People</option>
                                                <option value="Religion">Religion</option>
                                                <option value="Science">Science</option>
                                                <option value="Signs&Symbols">Signs/Symbols</option>
                                                <option value="Sports&Recreation">Sports/Recreation</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Transportation">Transportation</option>
                                                <option value="Vintage">Vintage</option>
                                            </select>
                                            <label for="floatingSelect">Catergory</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="file_country" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Region">
                                                <option value="">Select Region</option>
                                                <option value="al">Algeria</option>
                                                <option value="bw">Botswana</option>
                                                <option value="co">Comoros</option>
                                                <option value="drc">Democratic Republic of the Congo</option>
                                                <option value="sz">Eswatini</option>
                                                <option value="ls">Lesotho</option>
                                                <option value="mg">Madagascar</option>
                                                <option value="mw">Malawi</option>
                                                <option value="mu">Mauritius</option>
                                                <option value="mz">Mozambique</option>
                                                <option value="na">Namibia</option>
                                                <option value="sc">Seychelles</option>
                                                <option value="za">South Africa</option>
                                                <option value="tz">Tanzania</option>
                                                <option value="zm">Zambia</option>
                                                <option value="zw">Zimbabwe</option>                                                
                                            </select>
                                            <label for="floatingSelect">Region</label>
                                        </div>

                                        <div class=" d-grid gap-2 my-3">
                                            <button class="btn btn-primary">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

