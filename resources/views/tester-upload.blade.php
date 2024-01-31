@extends('layouts.admin')

<style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>

@section('content')

<div class="container mt-5">
   <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
      <h3 class="text-center mb-5">Upload File in Laravel</h3>
         @csrf
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <strong>{{ $message }}</strong>
         </div>
         @endif
         @if (count($errors) > 0)
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif
         <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Select file</label>
         </div>
      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Upload Files</button>

      <div class="card">
        <div class="card-body">
            <div id="drop-area" class="border rounded d-flex justify-content-center align-items-center"
                style="height: 200px; cursor: pointer;">
                <div class="text-center">
                    <i class="bi bi-cloud-arrow-up-fill text-primary" style="font-size: 48px;"></i>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <p class="mt-3">Drag and drop your image here or click to select a file.</p>
                </div>
            </div>
            <input type="file" id="fileElem" multiple accept="image/*" class="d-none">
        </div>
      </div>

   </form>
</div>


@endsection
