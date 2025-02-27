@extends('layouts.admin')

@section('description', '')
@section('keywords', '')

@section('title',  '')

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
                @include('includes.admin.file-navPagesbtn')
           </div>
        </div>

        <div class="col-9">
            <div class="row">
                
                <div class="col-3">   
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-body">
                                                           
                            <div class="col-12">
                                <img src="{{ URL::asset('images/temp-img.jpg') }}" class="d-block mx-auto col-8">
                                <p class="text-center py-3">{{ Auth::user()->name }}</p>
                            </div>

                            <hr class="border-3 border-primary">

                            <div class="col-12 text-center">
                                <h4>Unpaid Earnings</h4>
                                <h1>R0</h1>
                                <span>*Upload approximately every 15 minutes</span>
                            </div>
                            

                            <hr class="border-3 border-primary">

                            <div class="col-12 text-center">
                                <p>Payment calculated at the end of every month for contributors who meet their minimum payout amount</p>
                                <a href="">Learn more</a>
                            </div>
                            
                            <hr class="mx-3 border-3 border-primary">

                            <div class="col-12 text-center">
                                <h2>0% Profile Strength</h2>
                                <p>Increase your discoverability with our social display.</p>
                            </div>

                        </div>
                    </div> 
                </div>

                <div class="col-9">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">
                            
                            <nav class="d-flex flex-row nav nav-pills" id="pills-tab" role="tablist">
                                <span class="p-2 col-8">Uploads</span>

                                <a class="rounded-0 nav-link active px-3" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Live</a>

                                <a class="rounded-0 nav-link px-3" id="pills-disabled-tab" data-bs-toggle="pill" href="#pills-disabled" role="tab" aria-controls="pills-disabled" tabindex="-1" aria-disabled="true">Review</a>
                               
                                <a class="rounded-0 nav-link px-3" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Archive</a>
                            </nav>

                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                
                                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    @include('includes.admin.dashboardTabArchive')
                                </div>
                                    
                                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab">
                                    @include('includes.admin.dashboardTabReview')
                                </div>

                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    @include('includes.admin.dashboardTabSubmit')
                                </div>

                            </div>
                        </div>

                    </div>
                </div>      
            </div>
            
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">

                            <nav class="d-flex flex-row nav nav-pills" id="pills-tab" role="tablist">
                                <span class="py-2 col-8">Popular</span>
                                
                                <a class="rounded-0 nav-link active" id="pills-live-tab" data-bs-toggle="pill" href="#pills-live" role="tab" aria-controls="pills-live" tabindex="-1" aria-audio="true">Live</a>
                                <a class="rounded-0 nav-link" id="pills-other-tab" data-bs-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false">Other</a>

                            </nav>
                        </div>
                         <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    @include('includes.admin.dashboardTabPopularLive')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">

                            <nav class="d-flex flex-row nav nav-pills " id="pills-tab" role="tablist">
                                <span class="py-2 col-9">Overall Performance</span>
                                
                                <a class="rounded-0 nav-link active" id="pills-photo-tab" data-bs-toggle="pill" href="#pills-photo" role="tab" aria-controls="pills-photo" tabindex="-1" aria-audio="true">Photos</a>
                                <a class="rounded-0 nav-link" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">Videos</a>
                                <a class="rounded-0 nav-link" id="pills-audio-tab" data-bs-toggle="pill" href="#pills-audio" role="tab" aria-controls="pills-audio" aria-selected="true">Audio</a>

                            </nav>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                
                                <div class="tab-pane fade show active" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">
                                    
                                    <figure class="highcharts-figure">
                                        <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-2025-tab" data-bs-toggle="tab" href="#nav-2024" role="tab" aria-controls="nav-2024" aria-selected="true">2024</a>
                                        </nav>

                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-2024" role="tabpanel" aria-labelledby="nav-2024-tab">
                                                <div id="photos-container"></div>
                                            <div>
                                            <div class="tab-pane fade" id="nav-2025" role="tabpanel" aria-labelledby="nav-2025-tab"></div>
                                            <div class="tab-pane fade" id="nav-2026" role="tabpanel" aria-labelledby="nav-2026-tab"></div>
                                        </div>
                                    </figure>

                                </div>
                                
                                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab"> </div>
                                
                                <div class="tab-pane fade show active" id="pills-audio" role="tabpanel" aria-labelledby="pills-audio-tab"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script type="text/javascript">
    Highcharts.chart('photos-container', {
        chart: {type: 'column'},
        title: {text: 'Photos for 2024'},
        xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']},
        credits: {enabled: true},
        plotOptions: {
            column: {borderRadius: '25%'}
        },
        series: [
            {name: 'Views',data: [5, 3, 4, 7, 2, 5, 3, 4, 7, 2, 1,1]},
            {name: 'Downloads', data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}, 
            {name: 'Shares',data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}
        ]
    });
    </script>

    <script type="text/javascript">
    Highcharts.chart('videos-container', {
        chart: {type: 'column'},
        title: {text: 'Videos for 2024'},
        xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']},
        credits: {enabled: true},
        plotOptions: {
            column: {borderRadius: '25%'}
        },
        series: [
            {name: 'Views',data: [5, 3, 4, 7, 2, 5, 3, 4, 7, 2, 1,1]},
            {name: 'Downloads', data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}, 
            {name: 'Shared',data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}
        ]
    });
    </script>

    <script type="text/javascript">
    Highcharts.chart('audios-container', {
        chart: {type: 'column'},
        title: {text: 'Audios for 2024'},
        xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']},
        credits: {enabled: true},
        plotOptions: {
            column: {borderRadius: '25%'}
        },
        series: [
            {name: 'Views',data: [5, 3, 4, 7, 2, 5, 3, 4, 7, 2, 1,1]},
            {name: 'Downloads', data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}, 
            {name: 'Shared',data: [0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5]}
        ]
    });
    </script>

@endsection


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    

    <script type="text/javascript">
      function tabBtnIndex(tabIdIndex) {
        var i;
        var x = document.getElementsByClassName("tabClassIndex");
        for (i = 0; i < x.length; i++) {x[i].style.display = "none";}
        document.getElementById(tabIdIndex).style.display = "block";
      }
    </script>

    <script type="text/javascript">
      function tabBtnChart(tabIdChart) {
        var i;
        var x = document.getElementsByClassName("tabClassChart");
        for (i = 0; i < x.length; i++) {x[i].style.display = "none";}
        document.getElementById(tabIdChart).style.display = "block";
      }
    </script>
  



