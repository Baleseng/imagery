@extends('layouts.app')

@section('description', '')
@section('keywords', '')



@section('title',  '')

@section('content')

<div class="search-container border bg-black bg-gradient container-fluid py-3">
  @include('includes.users.file-search-field')
</div>

<div class="container-fluid position-relative">
  <div class="row">
    <div class="col-lg-8 border">
      
      <div class="mt-2 mx-auto col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-10" role="group">  
        
        <div class="d-inline-block col-xxl-4 col-xl-2 col-lg-2 col-md-2 col-3">
          <form method="POST" action="{{url('/feed')}}" method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf      

            <input type="hidden" value="{{ Auth::user()->id }}" name="users_id"/>
            <input type="hidden" value="{{ $id->id }}" name="file_id"/>
            
            <button type="submit" class="btn btn-primary col-12"><i class="fa-solid fa-share"></i> Post</button> 
          </form>

        </div>

        <div class="d-inline-block col-xxl-4 col-xl-2 col-lg-2 col-md-2 col-3">
          <form method="POST" action="">
            {{ csrf_field() }}          
            <button type="submit" class="btn btn-primary col-12"><i class="fa-solid fa-heart"></i> Save</button>   
          </form>
        </div>
      
        <div class="d-inline-block col-xxl-4 col-xl-2 col-lg-2 col-md-2 col-3">
          <form method="POST" action="">
            {{ csrf_field() }}          
            <button type="submit" class="btn btn-primary col-12"><i class="fa-solid fa-download"></i> Mockup</button>   
          </form>
          <i class=""></i>
        </div>

      </div>

      <div class="mx-auto my-3 col-9 overflow-hidden position-relative">
        <div class="">
          <img src="{{ url('storage/images/'.$id->file_name) }}" class="d-block mx-auto w-100">
        </div>
      </div>

    </div>
    <div class="col-lg-4">
      <div class="shadow-sm p-3 bg-white rounded">
        @include('includes.users.file-package-'.$id->file_usage)
        <div class="my-3">

          <p class="text-secondary">Title: 
              <h3 class="d-block text-dark text-capitalize">{{ $id->file_title }}</h3>
          </p>

          <p class="text-secondary">Description : 
              <span class="d-block text-dark text-capitalize">{{ $id->file_description}}</span>
          </p>
          
          <p class="text-secondary">Credit: 
              <span class="d-block text-dark text-capitalize">{{ $id->creator->name }}</span>
          </p>

          <p class="text-secondary">Used For: 
              <span class="d-block text-dark text-capitalize">{{ $id->file_usage }}</span>
          </p>

          <p class="text-secondary">Catergory: 
              <span class="d-block text-dark text-capitalize">{{ $id->file_category }}</span>
          </p>

          <p class="text-secondary">Date Created: 
              <span class="d-block text-dark text-capitalize">{{ $id->created_at }}</span>
          </p>

        </div>
      </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
      <div class="p-2 bd-highlight">Flex item 1</div>
      <div class="p-2 bd-highlight">Flex item 2</div>
      <div class="p-2 bd-highlight">Flex item 3</div>
    </div>

  </div>
</div>

@endsection

