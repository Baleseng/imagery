@extends('layouts.app')

@section('description', '')
@section('keywords', '')

<style> .select { background-color: aqua; width: 500px; padding: 2rem; margin-top: 1rem;} </style>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"> </script>

@section('title',  '')

<div class="mt-5 border bg-black bg-gradient container-fluid">
  @include('includes.users.file-search-field')
</div>

    <h3>Show/hide div elements based on the selected checkbox</h2>
   <label for = "first_check"> First </label> <input type = "checkbox" id = "first_check" name = "first_check" value="first">
   <label for = "second_check"> Second </label> <input type = "checkbox" id = "second_check" name = "second_check" value = "second">
   <label for = "third_check"> Third </label> <input type = "checkbox" id = "third_check" name = "third_check" value = "third">
   <label for = "fourth_check"> Fourth </label> <input type = "checkbox" id = "fourth_check" name = "fourth_check" value = "fourth">
   <div class="select" id = "first" style = "display:none"> <p> first </p> </div>
   <div class="select" id = "second" style = "display:none"> <p> second </p> </div>
   <div class="select" id = "third" style = "display:none"> <p> third </p> </div>
   <div class="select" id = "fourth" style = "display:none"> <p> fourth </p> </div>

@section('content')

<script>    
    $(document).ready(function () {
        $('input[type="checkbox"]').click(function () {
            var bool = $(this).attr("value");
            $("#" + bool).toggle();
        });
    });
</script>


@endsection


