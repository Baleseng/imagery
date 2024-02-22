@extends('layouts.admin')

@section('description', '')
@section('keywords', '')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('title',  '')

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
                        
                        @include('includes.admin.file-navEditPreviewbtn')

                    </div>
                    <div class="card rounded-0">
                        <div class="card-body">
                            
                            

                            <form method="POST" action="{{ url('admin/'.$id->id) }}" id="reasonInput">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="row d-flex">

                                    @include('includes.admin.file-editform-first')

                                    <div id="div1" class="mb-3 border p-2">
                                        
                                        <label class="form-label fw-bold d-block">License</label>
                                        
                                        <input class="cl-custom-check" type="checkbox" id="standard" name="standard" value="standard" />
                                        <label class="cl-custom-check-label" for="standard">Standard</label>
                                        
                                        <input class="cl-custom-check" type="checkbox" id="extended" name="extended" value="extended"/>
                                        <label class="cl-custom-check-label" for="extended">Extended</label>

                                        <input class="cl-custom-check" type="checkbox" id="enhance" name="enhance" value="enhance"/>
                                        <label class="cl-custom-check-label" for="enhance">Enhance</label>

                                        <input class="cl-custom-check" type="checkbox" id="editorial" name="editorial" value="editorial"/>
                                        <label class="cl-custom-check-label" for="editorial">Editorial</label>
                                        
                                    </div>


                                    @include('includes.admin.file-editform-second')

                                    <div class="mb-3 border p-2">
                                        <label class="form-label fw-bold d-block">Keywords</label>
                                        
                                        <span class="choiceBox">Please select Keywords</span>
                                       
                                        <div class="type type01">    

                                            <input type="checkbox" class="inputCheck" id="check1" name="keywords" value="holiday">
                                            <label class="labelCheck" for="check1">Holidays</label>

                                            <input type="checkbox" class="inputCheck" id="check2" name="keywords" value="travel">
                                            <label class="labelCheck" for="check2">Travel</label>

                                            <input type="checkbox" class="inputCheck" id="check3" name="keywords" value="mountian">
                                            <label class="labelCheck" for="check3">Mountian</label>

                                            <input type="checkbox" class="inputCheck" id="check4" name="keywords" value="ocean">
                                            <label class="labelCheck" for="check4">Ocean</label>

                                            <input type="checkbox" class="inputCheck" id="check5" name="keywords" value="beach">
                                            <label class="labelCheck" for="check5">Beach</label>

                                            <input type="checkbox" class="inputCheck" id="check6" name="keywords" value="man">
                                            <label class="labelCheck" for="check6">Man</label>  
                            
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="submitCheckboxInput" class="form-label fw-bold d-block">Approval</label>
                                        <div class="btn-group" role="group">    
                                            <input type="radio" class="btn-check" name="status" value="submit" id="submitOption1" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="submitOption1">Submit No Correction</label>
                                            <input type="radio" class="btn-check" name="status" value="review" id="submitOption2" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="submitOption2">Submit With Correction</label>
                                        </div> 
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/> 
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

<script type="text/javascript">
 function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>

