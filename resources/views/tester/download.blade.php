@extends('layouts.app')
<style type="text/css">



</style>

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


    
<button class="btn btn-primary" onclick="downloadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Stack_Overflow_logo.svg/1280px-Stack_Overflow_logo.svg.png', 'LogoStackOverflow.png')" >DOWNLOAD</button>


   

@endsection
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


