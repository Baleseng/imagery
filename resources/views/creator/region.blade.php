@extends('layouts.admin')

@section('description', '')
@section('keywords', '')

@section('title',  '')

<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

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
                <a href="{{ url('/creator/add') }}" class="btn btn-primary mb-2" data-bs-target="#upLoad" id="demo" style="width:100%;"><i class="fa-solid fa-upload"></i> Upload</a>
                @include('includes.admin.upload-btn')
           </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="btn mt-2 mx-auto col-12" role="group" aria-label="Basic outlined button group">
                    
                    @include('includes.admin.file-navEditPreviewbtn')

                </div>
            </div>
            <div id="demo-wrapper ">
                <div id="map-box">
                    
                    <div id="container"></div>

                    <div id="up"></div>
                    <div class="selector">
                        <button id="btn-prev-map" class="prev-next" aria-label="Previous map"><i class="fa fa-angle-left"></i></button>
                        <!-- Note: jQuery UI combobox should be replaced with an accessible widget -->
                        <select aria-label="Select a map to display" id="mapDropdown" class="ui-widget combobox"></select>
                        <button id="btn-next-map" class="prev-next" aria-label="Next map"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <div id="side-box">
                        <input type="checkbox" id="chkDataLabels" checked='checked' />
                        <label for="chkDataLabels">Data labels</label>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</div>

<script src="https://imagery.test:5173/resources/js/map.js"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/mapdata/index.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="https://www.highcharts.com/samples/static/jquery.combobox.js"></script>
