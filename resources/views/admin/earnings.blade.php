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
                @include('includes.admin.file-navPagesbtn')
           </div>
        </div>

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
