@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')

<div class="mt-5 border bg-black bg-gradient container-fluid">
  @include('includes.users.file-search-field')
</div>

@section('content')


<div class="container-fluid position-relative">
  <div class="row">
    <div class="col-lg-8 border">
      
      <div class="mt-2 mx-auto col-3" role="group">  
        
        <div class="d-inline-block">
          <form method="POST" action="{{url('/feed')}}" method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf      

            <input type="hidden" value="{{ Auth::user()->id }}" name="users_id"/>

            <input type="hidden" value="{{ $id->id }}" name="file_id"/>
            <input type="hidden" value="{{ $id->file_name }}" name="file_name"/>
            <input type="hidden" value="{{ $id->title }}" name="file_title"/>
            <input type="hidden" value="{{ $id->description }}" name="file_description"/>    
            
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-share"></i> Share</button> 
          </form>

        </div>

        <div class="d-inline-block">
          <form method="POST" action="">
            {{ csrf_field() }}          
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-heart"></i> Save</button>   
          </form>
        </div>
      
        <div class="d-inline-block">
          <form method="POST" action="">
            {{ csrf_field() }}          
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-download"></i> Try</button>   
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
        @include('includes.users.file-package-'.$id->usage)
        <div class="my-3">

          <p class="text-secondary">Title: 
              <h3 class="d-block text-dark text-capitalize">{{ $id->title }}</h3>
          </p>

          <p class="text-secondary">Description : 
              <span class="d-block text-dark text-capitalize">{{ $id->description}}</span>
          </p>
          
          <p class="text-secondary">Credit: 
              <span class="d-block text-dark text-capitalize">{{ $id->creator->name }}</span>
          </p>

          <p class="text-secondary">Used For: 
              <span class="d-block text-dark text-capitalize">{{ $id->usage }}</span>
          </p>

          <p class="text-secondary">Catergory: 
              <span class="d-block text-dark text-capitalize">{{ $id->category }}</span>
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

