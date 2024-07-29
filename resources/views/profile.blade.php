@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')

<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

@section('content')

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
        <h2>Profile</h2>
        <h6>User details</h6> 
        <div class="border my-3 p-2">
          <div class="d-flex justify-content-between bd-highlight mb-2 border-bottom">
            <div class="p-2 bd-highlight">User Id</div>
            <div class="p-2 bd-highlight">000000</div>
            <div class="p-2 bd-highlight"></div>
          </div>
          <div class="d-flex justify-content-between bd-highlight mb-2 border-bottom">
            <div class="p-2 bd-highlight">Name</div>
            <div class="p-2 bd-highlight">Stephen Mokgosi</div>
            <div class="p-2 bd-highlight">Edit</div>
          </div>
          
          <div class="d-flex justify-content-between bd-highlight mb-2 border-bottom">
            <div class="p-2 bd-highlight">Password</div>
            <div class="p-2 bd-highlight">.........</div>
            <div class="p-2 bd-highlight">Edit</div>
          </div>
          <div class="d-flex justify-content-between bd-highlight mb-2">
            <div class="p-2 bd-highlight">Email</div>
            <div class="p-2 bd-highlight">baleseng33@outlook.com</div>
            <div class="p-2 bd-highlight">Edit</div>
          </div>
        </div>

        <h6>Upload Profile Picture</h6> 
        <h6>Create / Manage Page</h6> 
        <h2>Personal Config</h2>
        <h6>Security / Privacy</h6> 
        <h6>Setting A.I</h6>
        <h6>Setting Notification</h6>
        <h6>Setting Requests</h6>
        <h2>Site Config</h2>
        <h6>Sitemap</h6>
        <h6>Feedback</h6>
        <h6>Help</h6>
    </div>

</div>

@endsection

