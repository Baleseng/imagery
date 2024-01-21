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
                    <div class="btn mt-2 mx-auto col-12" role="group" aria-label="Basic outlined button group">
                        <a href="{{ url($url.'/preview/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url($url.'/region/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary"><i class="fa-solid fa-earth-africa"></i> Region</a>
                        <a href="{{ url('/creator') }}" class="btn btn-primary"><i class="fa-solid fa-cubes-stacked"></i> Dashboard</a>
                    </div>
                    <div class="card rounded-0">
                        <div class="card-body">
                            <form method="POST" action="{{ url('creator/'.$id->id) }}" id="reasonInput">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
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
                                                        <input type="file" name="file" value="{{ $id->name }}" id="selectImage" hidden>
                                                    </div>

                                                    <div class="img">
                                                        <img id="preview" src="blob:https://imagery.test/{{ $id->name }}" alt="your image" class="rounded-1" style="display:none; width: 100%; height:auto;" />
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id"/>
                                        <input type="hidden" value="review" name="status"/>
                                        
                                    </div>

                                    <div class="vr mx-4 p-0"></div>

                                    <div class="col-5">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInputKeywords" value="{{ $id->title }}" name="title" placeholder="Keywords">
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
                                            <input type="text" class="form-control border-bottom border-0" name="keywords" value="{{ $id->keywords }}" id="floatingInputKeywords" placeholder="Keywords">
                                            <label for="floatingInput">Keywords</label>
                                        </div>

                                        <div class="mb-3 border p-2">
                                            <span class="">Keywords Suggestion</span>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="description" value="{{ $id->description }}" placeholder="Description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="category" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
                                                <option value="{{ $id->category }}">{{ $id->category }}</option>
                                                <option value="Abstract">Abstract</option>
                                                <option value="Animals/Wildlife">Animals/Wildlife</option>
                                                <option value="Arts">Arts</option>
                                                <option value="Backgrounds/Textures">Backgrounds/Textures</option>
                                                <option value="Beauty/Fashion">Beauty/Fashion</option>
                                                <option value="Buildings/Landmarks">Buildings/Landmarks</option>
                                                <option value="Business/Finance">Business/Finance</option>
                                                <option value="Celebrities">Celebrities</option>
                                                <option value="Education">Education</option>
                                                <option value="Food&drink">Food and drink</option>
                                                <option value="Healthcare/Medical">Healthcare/Medical</option>
                                                <option value="Holidays">Holidays</option>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Interiors">Interiors</option>
                                                <option value="Miscellaneous">Miscellaneous</option>
                                                <option value="Nature">Nature</option>
                                                <option value="Objects">Objects</option>
                                                <option value="Parks/Outdoor">Parks/Outdoor</option>
                                                <option value="People">People</option>
                                                <option value="Religion">Religion</option>
                                                <option value="Science">Science</option>
                                                <option value="Signs/Symbols">Signs/Symbols</option>
                                                <option value="Sports/Recreation">Sports/Recreation</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Transportation">Transportation</option>
                                                <option value="Vintage">Vintage</option>
                                            </select>
                                            <label for="floatingSelect">Catergory</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="country" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Region">
                                                <option value="{{ $id->country }}">{{ $id->country }}</option>
                                                <option value="al">Algeria</option>
                                                <option value="ao">Angola</option>
                                                <option value="bi">Benin</option>
                                                <option value="bw">Botswana</option>
                                                <option value="bf">Burkina Faso</option>
                                                <option value="bu">Burundi</option>
                                                <option value="cv">Cape Verde</option>
                                                <option value="cf">Central African Republic</option>
                                                <option value="ch">Chad</option>
                                                <option value="co">Comoros</option>
                                                <option value="cm">Cote d’Ivoire</option>
                                                <option value="drc">Democratic Republic of the Congo</option>
                                                <option value="dj">Djibouti</option>
                                                <option value="eg">Egypt</option>
                                                <option value="eq">Equatorial Guinea</option>
                                                <option value="er">Eritrea</option>
                                                <option value="sz">Eswatini</option>
                                                <option value="et">Ethiopia</option>
                                                <option value="ga">Gabon</option>
                                                <option value="gm">Gambia</option>
                                                <option value="gh">Ghana</option>
                                                <option value="gn">Guinea</option>
                                                <option value="gb">Guinea-Bissau</option>
                                                <option value="ke">Kenya</option>
                                                <option value="ls">Lesotho</option>
                                                <option value="lr">Liberia</option>
                                                <option value="ly">Libya</option>
                                                <option value="mg">Madagascar</option>
                                                <option value="mw">Malawi</option>
                                                <option value="ml">Mali</option>
                                                <option value="mr">Mauritania</option>
                                                <option value="mu">Mauritius</option>
                                                <option value="ma">Morocco</option>
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

@push('script')
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
@endpush
