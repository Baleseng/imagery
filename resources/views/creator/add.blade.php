@extends('layouts.admin')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid" style="position: relative; top:3rem;">
    <div class="row justify-content-center">
        @include('includes.admin.upload-btn')
        <div class="col-9">
            <div class="row d-flex">
                <div class="col-12 overflow-auto">
                    <div class="card rounded-0">
                        <div class="card-body">
                            
                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                @csrf
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
                                                <div id="drop-area" class="border rounded d-flex justify-content-center align-items-center" style="height: 200px; cursor: pointer;">
                                                    <div class="text-center">
                                                        <input type="file" name="file" class="custom-file-input form-control">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id"/>
                                    <input type="hidden" value="review" name="status"/>
                                        
                                    </div>

                                    <div class="vr mx-3 p-0"></div>

                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInputKeywords" name="title" placeholder="Keywords">
                                            <label for="floatingInput">File Name</label>
                                        </div>

                                        <div class="mb-3">
                                            <label for="imageTypeCheckboxInput" class="form-label fw-bold d-block">File Type</label>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                
                                                <input type="radio" class="btn-check" name="type" value="photo"  id="btnRadio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnRadio1">Photo</label>

                                                <input type="radio" class="btn-check" name="type" value="video" id="btnRadio2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio2">Video</label>

                                                <input type="radio" class="btn-check" name="type" value="audio" id="btnRadio3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio3">Audio</label>

                                            </div>
                                        </div> 

                                        <div class="mb-3">
                                            <label for="usageCheckboxInput" class="form-label fw-bold d-block">Usage</label>
                                            
                                            <div class="btn-group" role="group">
                                                
                                                <input type="radio" class="btn-check" name="usage" value="commercial" id="option3" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="option3">Commercial</label>

                                                <input type="radio" class="btn-check" name="usage" value="download" id="option4" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="option4">Download</label>

                                            </div>  
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" 
                                            name="keywords" value="" id="floatingInputKeywords" placeholder="Keywords">
                                            <label for="floatingInput">Keywords</label>
                                        </div>

                                        <div class="mb-3 border p-2">
                                            <span class="">Keywords Suggestion</span>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="description" value="" placeholder="Description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="category" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
                                                <option value="">Select Catergory</option>
                                                <option value="test">Abstract</option>
                                                <option value="">Animals/Wildlife</option>
                                                <option value="">Arts</option>
                                                <option value="">Backgrounds/Textures</option>
                                                <option value="">Beauty/Fashion</option>
                                                <option value="">Buildings/Landmarks</option>
                                                <option value="">Business/Finance</option>
                                                <option value="">Celebrities</option>
                                                <option value="">Education</option>
                                                <option value="">Food and drink</option>
                                                <option value="">Healthcare/Medical</option>
                                                <option value="">Holidays</option>
                                                <option value="">Industrial</option>
                                                <option value="">Interiors</option>
                                                <option value="">Miscellaneous</option>
                                                <option value="">Nature</option>
                                                <option value="">Objects</option>
                                                <option value="">Parks/Outdoor</option>
                                                <option value="">People</option>
                                                <option value="">Religion</option>
                                                <option value="">Science</option>
                                                <option value="">Signs/Symbols</option>
                                                <option value="">Sports/Recreation</option>
                                                <option value="">Technology</option>
                                                <option value="">Transportation</option>
                                                <option value="">Vintage</option>
                                            </select>
                                            <label for="floatingSelect">Catergory</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="country" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Region">
                                                <option value="">Select Region</option>
                                                <option value="">Algeria</option>
                                                <option value="ao">Angola</option>
                                                <option value="">Benin</option>
                                                <option value="bw">Botswana</option>
                                                <option value="bf">Burkina Faso</option>
                                                <option value="">Burundi</option>
                                                <option value="">Cabo Verde</option>
                                                <option value="">Central African Republic</option>
                                                <option value="">Chad</option>
                                                <option value="">Comoros</option>
                                                <option value="">Congo, Democratic Republic of the</option>
                                                <option value="cm">Cote d’Ivoire</option>
                                                <option value="dj">Djibouti</option>
                                                <option value="eg">Egypt</option>
                                                <option value="">Equatorial Guinea</option>
                                                <option value="er">Eritrea</option>
                                                <option value="sz">Eswatini</option>
                                                <option value="et">Ethiopia</option>
                                                <option value="ga">Gabon</option>
                                                <option value="gm">Gambia</option>
                                                <option value="gh">Ghana</option>
                                                <option value="gn">Guinea</option>
                                                <option value="">Guinea-Bissau</option>
                                                <option value="ke">Kenya</option>
                                                <option value="ls">Lesotho</option>
                                                <option value="lr">Liberia</option>
                                                <option value="ly">Libya</option>
                                                <option value="ma">Madagascar</option>
                                                <option value="mw">Malawi</option>
                                                <option value="ml">Mali</option>
                                                <option value="">Mauritania</option>
                                                <option value="">Mauritius</option>
                                                <option value="">Morocco</option>
                                                <option value="mz">Mozambique</option>
                                                <option value="na">Namibia</option>
                                                <option value="ne">Niger</option>
                                                <option value="ng">Nigeria</option>
                                                <option value="rw">Rwanda</option>
                                                <option value="st">Sao Tome and Principe</option>
                                                <option value="sn">Senegal</option>
                                                <option value="sc">Seychelles</option>
                                                <option value="sl">Sierra Leone</option>
                                                <option value="so">Somalia</option>
                                                <option value="za">South Africa</option>
                                                <option value="ss">South Sudan</option>
                                                <option value="sd">Sudan</option>
                                                <option value="tz">Tanzania</option>
                                                <option value="tg">Togo</option>
                                                <option value="tn">Tunisia</option>
                                                <option value="ug">Uganda</option>
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
