@extends('layouts.app')

@section('content')

<div class="p-5 text-white text-center"></div>
    <div class="container-fluid md-auto position-relative">
        <div class="row">
            <!-- Left Side Section -->
            <div class="d-none d-md-none d-lg-block d-xl-block bg-light" style="width:245px;">
                <div class="rounded border p-2">
                    <h5>Assets Type</h5>
                    <a href=""></a>
                </div>
                <div class="rounded border p-2 my-3">
                    <h5>Country</h5>
                </div>
                <div class="rounded border p-2">
                    <h6>Catergory</h6>
                </div>
            </div>
            <!-- Main Section -->
            <div class="col-xl col-lg-9 col-md bg-light">
                <div class="row">
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
                @include('includes.users.img-cards')
            </div>
        </div>
    </div>
</div>

@endsection
