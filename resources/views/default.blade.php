@extends('layouts.app')

@section('content')

<div class="p-5 text-white text-center"></div>
    <div class="container-fluid md-auto position-relative">
        <div class="row">
            
            <!-- Left Side Section -->
            <div class="col-lg-3">
              <div class="bg-white border rounded p-2">Assets Type</div>
              <div class="bg-white border rounded p-2 my-2">Country</div>
              <div class="bg-white border rounded p-2">Catergory</div>
            </div>
            
            <!-- Main Section -->
            <div class="col-xl col-lg-9 col-md bg-light">
                <div class="row">
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
                @include('includes.users.file-cards')
            </div>
        </div>
    </div>
</div>

@endsection

