@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')


@section('content')


<div class="container-fluid position-relative mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 feed-container">
  <div class="row">
    <div class="col-lg-3 mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-0 mb-3">

      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-action">
          <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Your Profile</a>
        </li>
        <li class="list-group-item list-group-item-action">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Recent Content</a>
        </li>
        <li class="list-group-item">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Recent</a>
        </li>
      </ul>

    </div>
    
    <div class="col-lg-4">

      @foreach ($feed as $post)
      <div class="card mb-3" style="max-width:600px">
        <div class="card-header">
          
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-8  overflow-hidden" style="max-height:500;">
              <img class="img-thumbnail rounded-3" src="{{ URL::asset('images/temp-img.jpg') }}" alt="profile image" style="width:70px;">
              <span class="d-inline-block align-top">
                <h6 class="mb-0"></h6>
                <p class="card-text"><small class="text-muted ">{{ $post->updated_at }}</small></p>
              </span>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-4">
              <div class="d-flex flex-row-reverse">
                

                <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="text-secondary"><i class="fa-solid fa-ellipsis-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-end text-secondary" aria-labelledby="navbarDropdown">
                <ul class="list-group list-group-flush">
                  
                  <li class="list-group-item list-group-item-action dropdown-item">
                    <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Save</a>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-item">
                      <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Copy link to post</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                      <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Embed this post</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                      <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Not interested</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                      <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Unfollow</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                      <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Report this post</a>
                  </li>

                </ul>
              </div>


              </div>
            </div>
          </div>

        </div>
        <a href="#" class="">
          <img class="card-img rounded-0" src="{{ url('storage/images/'.$post->file->file_name) }}" alt="Card image">
        </a>
        <div class="card-body">
          <div class="card-text">
            <h5>{{ $post->file->file_title }}</h5>
          </div>
          <hr/>
          <div class="row">
            <div class="col-6 position-relative">
              <span class="text-secondary fs-5 fw-bold mx-2">0</span>

            </div>
            <div class="col-6">
              <div class="d-flex flex-row-reverse text-secondary fs-5">0 comment</div>
            </div>
          </div>

        </div>
        <div class="card-footer">
          
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 text-secondary text-center fs-6">
              <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="text-secondary"><i class="fa-solid fa-heart"></i></a>
              <div class="dropdown-menu dropdown-menu-end text-secondary" aria-labelledby="navbarDropdown">
                <ul class="list-group list-group-horizontal border-0">
                  <li class="list-group-item dropdown-item border-0">
                    <a class="link-secondary" href=""><i class="fa-solid fa-face-kiss-wink-heart"></i></a>
                  </li>
                  <li class="list-group-item dropdown-item border-0">
                    <a class="link-secondary" href=""><i class="fa-solid fa-face-grin-tears"></i></a>
                  </li>
                  <li class="list-group-item dropdown-item border-0">
                    <a class="link-secondary" href=""><i class="fa-solid fa-face-grin-tears"></i></a>
                  </li>
                  <li class="list-group-item dropdown-item border-0">
                    <a class="link-secondary" href=""><i class="fa-solid fa-face-sad-tear"></i></a>
                  </li> 
                  <li class="list-group-item dropdown-item border-0">
                    <a class="link-secondary" href=""><i class="fa-solid fa-face-angry"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 text-secondary text-center fs-6"><i class="fa-solid fa-comments"></i></div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-4 text-secondary text-center fs-6"><i class="fa-solid fa-share-from-square"></i></div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
    

    <div class="col-lg-4 d-xxl-flex d-xl-flex d-lg-flex d-none">
      <ul class="list-group list-group-flush">
        <li class="list-group-item list-group-item-action">
          <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Sponsored</a>
        </li>
        <li class="list-group-item list-group-item-action">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Invite a Friend</a>
        </li>
        <li class="list-group-item">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">Create a Group</a>
        </li>
        <li class="list-group-item">
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">One of three columns</a>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection
