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

                <div class="col-4 overflow-auto">
                


                </div>

                <div class="col-8 overflow-auto">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <form method="POST" action="{{ url('creator')}}">
                                {{ csrf_field() }}
                                <div class="row d-flex">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="imageTypeCheckboxInput" class="form-label fw-bold d-block">File Type</label>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                
                                                <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnRadio1">Photo</label>

                                                <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio2">Video</label>

                                                <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnRadio3">Audio</label>

                                            </div>
                                        </div> 

                                        <div class="mb-3">
                                            <label for="usageCheckboxInput" class="form-label fw-bold d-block">Usage</label>
                                            
                                            <div class="btn-group" role="group">
                                                
                                                <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="option3">Commercial</label>

                                                <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="option4">Editorail</label>

                                                <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="option5">Personal</label>

                                            </div>   
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInput" placeholder="Description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
                                                <option value="">None</option>
                                                <option value="">Abstract</option>
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
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInputLocation" placeholder="Location">
                                            <label for="floatingInputLocation">Location</label>
                                        </div>
                                    </div>

                                    <div class="vr mx-3 p-0"></div>

                                    <div class="col-5">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-bottom border-0" id="floatingInputKeywords" placeholder="Keywords">
                                            <label for="floatingInput">Keywords</label>
                                        </div>

                                        <div class="mb-3">
                                            <span class="">Keywords Suggestion</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" d-grid gap-2 my-3">
                                        <button class="btn btn-primary">SUBMIT</button>
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
