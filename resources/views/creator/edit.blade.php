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
                    <div class="btn mx-auto col-12" role="group" aria-label="Basic outlined button group">

                        @include('includes.admin.file-navEditPreviewbtn')

                    </div>
                    <div class="card rounded-0">
                        <div class="card-body">
                            
                            <form method="POST" action="{{ url('creator/'.$id->id) }}" id="reasonInput">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                                <div class="row d-flex">

                                    @include('includes.admin.file-editform')

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


