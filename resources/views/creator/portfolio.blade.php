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

        <div class="col-md-9">
            <div class="row">
                
            </div>
            
            <div class="row">
                

            </div>

            <div class="row">
                
            </div>
        </div>
    </div>
</div>

@endsection
