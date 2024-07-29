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
                @include('includes.admin.upload-btn')
           </div>
        </div>

        @include('includes.admin.file-profile')

    </div>
</div>

@endsection
