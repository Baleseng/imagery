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

                                    @include('includes.admin.file-editform')
                                        

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

