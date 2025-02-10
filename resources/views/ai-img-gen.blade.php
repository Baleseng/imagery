@extends('layouts.app')

@section('description', '')
@section('keywords', '')

<style type="text/css">
.filterDiv {
  display: none;
}
.show {
  display: block;
}
</style>

@section('title',  '')
      

@section('content')

<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
            
    </div>
</div>

@endsection

