@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')


@section('content')


<div class="container-fluid position-relative mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 feed-container">
  <div class="row">
    <div class="col-lg-3 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-3">
      <div class="bg-white border rounded p-3"><a href="">Your Profile</a></div>
      <div class="bg-white border rounded p-3 my-2"><a href="">Recent Content</a></div>
      <div class="bg-white border rounded p-3"><a href="">Recent</a></div>
    </div>
    
    <div class="col-lg-4">

      @foreach ($posts as $post)
      <div class="card mb-3" style="max-width:600px">
        <div class="card-header">
          
          <div class="row">
            <div class="col-6 overflow-hidden" style="max-height:500;">
              <img class="img-thumbnail rounded-3" src="{{ URL::asset('images/temp-img.jpg') }}" alt="profile image" style="width:70px;">
              <span class="d-inline-block align-top">
                <h6 class="mb-0"></h6>
                <p class="card-text"><small class="text-muted ">{{ $post->updated_at }}</small></p>
              </span>
            </div>
            <div class="col-6">
              <div class="d-flex flex-row-reverse"><i class="fa-solid fa-chevron-down"></i></div>
            </div>
          </div>

        </div>
        <a href="#" class="">
          <img class="card-img rounded-0" src="{{ url('storage/images/'.$post->file_name) }}" alt="Card image">
        </a>
        <div class="card-body">
          <div class="card-text">
            <h3>{{ $post->file_title }}</h3>
            <p>{{ $post->file_description }}</p>

          </div>
          <hr/>
          <div class="row">
            <div class="col-6 position-relative">
              <span class="text-secondary fs-5 p-0 position-absolute right-10"><i class="fa-solid fa-heart"></i></span>
              <span class="text-secondary fs-5 p-0 position-absolute"><i class="fa-solid fa-face-kiss-wink-heart"></i></span>
              <span class="text-secondary fs-5 p-0 position-absolute"><i class="fa-solid fa-face-grin-tears"></i></span>
              <span class="text-secondary fs-5 p-0 position-absolute"><i class="fa-solid fa-face-sad-tear"></i></span>
              <span class="text-secondary fs-5 p-0 position-absolute"><i class="fa-solid fa-face-angry"></i></span>
              <span class="text-secondary fs-5 fw-bold mx-2">0</span>
            </div>
            <div class="col-6">
              <div class="d-flex flex-row-reverse text-secondary fs-5">0 comment</div>
            </div>
          </div>

        </div>
        <div class="card-footer">
          
          <div class="row">
            <div class="col-4 text-secondary text-center fs-6"><i class="fa-solid fa-heart"></i> Like</div>
            <div class="col-4 text-secondary text-center fs-6"><i class="fa-solid fa-comments"></i> Comment</div>
            <div class="col-4 text-secondary text-center fs-6"><i class="fa-solid fa-share-from-square"></i> Share</div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
    

    <div class="col-lg-4">
      <div class="">
        <div class="">Sponsored</div>
        <div class="border-top">Invite a Friend</div>
        <div class="border-top">Create a Group</div>
        <div class="border-top">One of three columns</div>
      </div>
    </div>
  </div>
</div>

@endsection
