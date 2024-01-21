@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative" style="top:3rem;">
  <div class="row">
    <div class="col-lg-8 border" style="max-width:80%;">
      <div class="btn mt-2 mx-auto col-12" role="group" aria-label="Basic outlined button group">
        <span class="btn btn-primary"><i class="fa-solid fa-heart"></i> Save</span>
        <span class="btn btn-primary"><i class="fa-solid fa-share"></i> Share</span>
        <span class="btn btn-primary"><i class="fa-solid fa-download"></i> Try</span>
      </div>
      <div class="mx-auto my-3 col-9 border overflow-hidden" style="height: 500px;">
        <img src="{{ asset('storage/app/public/uploads/1705311587_Asses_Stephen_Mokgosi_Instagram-post.jpg') }}" class="object-fit-fill" style="width:100%;">
      </div>

    </div>
    <div class="col-lg-4">
      <div class="shadow-sm p-3 bg-white rounded">
        @include('includes.users.file-package-commercial')
      </div>
    </div>
  </div>
</div>

@endsection
