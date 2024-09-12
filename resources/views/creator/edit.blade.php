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
                    <div class="btn mx-auto col-12" role="group" aria-label="Basic outlined button group">

                        @include('includes.admin.file-navEditPreviewbtn')

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
                                                        <input type="file" name="file" value="{{ $id->file_name }}" id="selectImage" hidden>
                                                    </div>

                                                    <div class="img">
                                                        <img id="preview" src="{{ url('storage/images/'.$id->file_name) }}" alt="your image" class="rounded-1" style="width: 100%; height:auto;" />
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    @include('includes.admin.file-editform-first')

                                    <div class="mb-3">
                                            <label for="usageCheckboxInput" class="form-label fw-bold d-block">Usage</label>
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" name="usage" value="licensing" id="option3" autocomplete="off" checked onclick="showCommercial2()">
                                                <label class="btn btn-outline-primary" for="option3">Licensing</label>

                                                <input type="radio" class="btn-check" name="usage" value="paiddownload" id="option4" autocomplete="off" onclick="showCommercial1()">
                                                <label class="btn btn-outline-primary" for="option4">Pay-to-Download</label>

                                                <input type="radio" class="btn-check" name="usage" value="freedownload" id="option5" autocomplete="off" onclick="showCommercial0()">
                                                <label class="btn btn-outline-primary" for="option5">Free-Download</label>
                                            </div>
                                            <div>*Subject to administrator approval</div>
                                        </div>

                                    @include('includes.admin.file-editform-second')

                                        <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id"/>
                                        <input type="hidden" value="review" name="status"/>

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


