@extends('layouts.admin')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid" style="position: relative; top:3rem;">
    <div class="row justify-content-center">
        
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-0 position-sticky" style="top:4em;">
                @include('includes.admin.upload-btn')
           </div>
        </div>

        @include('includes.admin.file-preview')
   
    </div>
</div>

@stack('scriptChart')

@endsection

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
