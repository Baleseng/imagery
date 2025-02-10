@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


@section('content')

<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>


<div class="container-fluid position-relative">
    
    <div class="row">
        
        <div class="col-lg-8 border">
            <div class="btn mt-2 mx-auto col-12" role="group">  
                <div class="btn btn-primary">
                    <button class="btn btn-primary" onclick="downloadImage('{{ url("storage/images/".$id->file_name) }}', '{{ $id->title }}')" >DOWNLOAD</button>
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
            <div class="my-3">
                <p class="text-secondary">Title: 
                    <span class="d-block text-dark text-capitalize">{{ $id->title }}</span>
                </p>
                <p class="text-secondary">Credit: 
                    <span class="d-block text-dark text-capitalize">{{ $id->creator->name }}</span>
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

    </div>

</div>

<script type="text/javascript">
function downloadImage(url, name){
    fetch(url)
    .then(resp => resp.blob())
    .then(blob => {
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.style.display = 'block';
        a.href = url;
        // the filename you want
        a.download = name;
        document.body.appendChild(a);
        a.click();
        window.URL.revokeObjectURL(url);
    })
    .catch(() => alert('An error sorry'));
}
</script>

@endsection


