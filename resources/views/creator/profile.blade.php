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
        
        <div class="col-12">
            <div class="row">
               <div class="col-3"> testing 
            </div>
            
            <div class="row">
                

            </div>

            <div class="row">
                
            </div>
        </div>

    </div>
</div>

@endsection
