@extends('layouts.admin')

@section('description', '')
@section('keywords', '')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                @include('includes.admin.file-navPagesbtn')
           </div>
        </div>

        <div class="col-9">
            <div class="row d-flex">

                <div class="col-12 overflow-auto">
                    <div class="btn mt-2 mx-auto col-12" role="group" aria-label="Basic outlined button group">
                        
                        @include('includes.admin.file-navEditPreviewbtn')
                        @include('includes.admin.file-navArchivebtn')

                    </div>
                    <div class="card rounded-0">
                        <div class="card-body">
                        
                            <form method="POST" action="{{ url('admin/'.$id->id) }}" id="reasonInput">
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

                                                    <div class="img"><img id="preview" src="{{ url('storage/images/'.$id->file_name) }}" alt="your image" class="rounded-0" style="width: 100%; height:auto;" /></div>

                                                 </div>
                                            </div>
                                            <button class="btn btn- fs-5 text-uppercase">
                                                Examine File For Approval
                                            </button>
                                        </div> 
                                    </div>

                                    @include('includes.admin.file-editform-first')

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
                                    </div>

                                    <div id="divCommercial" class="mb-3 border p-2">
                                        
                                        <label class="form-label fw-bold d-block">License</label>
                                        
                                        <input class="cl-custom-check" type="checkbox" id="standard" name="file_standard" value="show"/>
                                        <label class="cl-custom-check-label" for="standard">Standard</label>
                                        
                                        <input class="cl-custom-check" type="checkbox" id="extended" name="file_extended" value="show"/>
                                        <label class="cl-custom-check-label" for="extended">Extended</label>

                                        <input class="cl-custom-check" type="checkbox" id="enhance" name="file_enhance" value="show" />
                                        <label class="cl-custom-check-label" for="enhance">Enhance</label>

                                        <input class="cl-custom-check" type="checkbox" id="editorial" name="file_editorial" value="show"/>
                                        <label class="cl-custom-check-label" for="editorial">Editorial</label>
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="imageOrientationCheckboxInput" class="form-label fw-bold d-block">File Orientation</label>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">    
                                            <input type="radio" class="btn-check" name="file_orientation" value="landscape"  id="btnOrientation1" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="btnOrientation1"><i class="fa-solid fa-id-card-clip"></i> Landscape</label>

                                            <input type="radio" class="btn-check" name="file_orientation" value="portrait" id="btnOrientation2" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnOrientation2"><i class="fa-solid fa-image-portrait fs-4"></i> Portrait</label>
                                        </div>
                                    </div>

                                    @include('includes.admin.file-editform-second')

                                    <div class="mb-3 border p-2">
                                        <label class="form-label fw-bold d-block">Keywords</label>
                                        
                                        <span class="choiceBox">Please select Keywords</span>
                                       
                                        <div class="type type01">    

                                            <input type="checkbox" class="inputCheck" id="check1" name="file_keywords" value="holiday">
                                            <label class="labelCheck" for="check1">Holidays</label>

                                            <input type="checkbox" class="inputCheck" id="check2" name="file_keywords" value="travel">
                                            <label class="labelCheck" for="check2">Travel</label>

                                            <input type="checkbox" class="inputCheck" id="check3" name="file_keywords" value="mountian">
                                            <label class="labelCheck" for="check3">Mountian</label>

                                            <input type="checkbox" class="inputCheck" id="check4" name="file_keywords" value="ocean">
                                            <label class="labelCheck" for="check4">Ocean</label>

                                            <input type="checkbox" class="inputCheck" id="check5" name="file_keywords" value="beach">
                                            <label class="labelCheck" for="check5">Beach</label>

                                            <input type="checkbox" class="inputCheck" id="check6" name="file_keywords" value="man">
                                            <label class="labelCheck" for="check6">Man</label>  
                            
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="submitCheckboxInput" class="form-label fw-bold d-block">Approval</label>
                                        <div class="btn-group" role="group">    
                                            <input type="radio" class="btn-check" name="file_status" value="submit" id="submitOption1" autocomplete="off" onclick="showCorrection1()" checked>
                                            <label class="btn btn-outline-primary" for="submitOption1">Submit No Correction</label>
                                            <input type="radio" class="btn-check" name="file_status" value="review" id="submitOption2" onclick="showCorrection2()" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="submitOption2">Submit With Correction</label>
                                        </div> 
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/> 
                                        <input type="hidden" value="{{ $id->creator_id }}" name="creator_id">
                                        <input type="hidden" value="{{ $id->file_name }}" name="file_name">
                                    </div>

                                    <div class=" d-grid gap-2 my-3">
                                        <button class="btn btn-primary">SUBMIT</button>

                                    </div>
                                    </form>

                                    <div id="divCorrection" class="mb-3 border p-2 form-group position-relative bg-light" style="display:none; z-index:1; bottom:55px;">
                                        <label for="comment">Notes:</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                        <button class="btn btn-danger my-2">Send</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
function showCommercial0(){
  document.getElementById('divCommercial').style.display ='none';
}
function showCommercial1(){
  document.getElementById('divCommercial').style.display ='none';
}
function showCommercial2(){
  document.getElementById('divCommercial').style.display = 'block';
}
</script>

<script type="text/javascript">
 function showCorrection1(){
  document.getElementById('divCorrection').style.display ='none';
}
function showCorrection2(){
  document.getElementById('divCorrection').style.display = 'block';
}
</script>

