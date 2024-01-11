@extends('layouts.admin')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid" style="position: relative; top:3rem;">
    <div class="row justify-content-center">
        
        @include('includes.admin.upload-btn')

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0 rounded-0">
                        <div class="card-body d-inline-flex">
                            <div class="col-5">
                              <img src="{{ URL::asset('images/temp-img.jpg') }}" class="d-block mx-auto col-7">
                              <p class="text-center py-3">Stephen Balesng Mokgosi</p> 
                            </div>

                           <div class="vr mx-3"></div>

                            <div class="col-5">
                                <h2>90% Profile Strength</h2>
                                 <hr class="mx-3 border-3 border-primary">
                                <p>Increase your discoverability with our social display.</p>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0 rounded-0">
                        <div class="card-body d-inline-flex">
                            <div class="col-5">
                                <h4>Unpaid Earnings</h4>
                                <h1>R0</h1>
                                <span>*Upload approximately every 15 minutes</span>

                            </div>
                            <div class="vr mx-3"></div>
                            <div class="col-6">
                                <p>Payment calculated at the end of every month for contributors who meet their minimum payout amount</p>
                                <a href="">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-0 mt-4">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">Uploads
                            <div class="float-end btn-group">
                                <button class="btn btn-primary active" onclick="tabBtnIndex('btnIndexSubmit')">Submit</button>
                                <button class="btn btn-primary" onclick="tabBtnIndex('btnIndexReview')">Review</button>
                                <button class="btn btn-primary" onclick="tabBtnIndex('btnIndexArchive')">Archive</button>
                            </div>
                        </div>
                        
                        <div class="card-body tabClassIndex" id="btnIndexSubmit">
                            @include('includes.admin.dashboardTabSubmit')
                        </div>
                        
                        <div class="card-body tabClassIndex" id="btnIndexReview" style="display:none;">
                            @include('includes.admin.dashboardTabReview')
                        </div>

                        <div class="card-body tabClassIndex" id="btnIndexArchive" style="display:none;">
                            @include('includes.admin.dashboardTabArchive')
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-0 mt-4">

                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">Performance
                            <div class="float-end btn-group">
                                <button class="btn btn-primary active" onclick="tabBtnChart('btnChartViews')">Photos</button>
                                <button class="btn btn-primary" onclick="tabBtnChart('btnChartDownloads')">Videos</button>
                                <button class="btn btn-primary" onclick="tabBtnChart('btnChartShared')">Audio</button>
                            </div>
                        </div>
                        <div class="card-body tabClassChart" id="btnChartViews">
                            <figure class="highcharts-figure">
                                <div class="d-flex flex-row-reverse">
                                  <button id='2020' class="btn btn-outline-primary">2024</button>
                                </div>
                                <div id="photos-container"></div>
                            </figure>
                        </div>
                        <div class="card-body tabClassChart" id="btnChartDownloads" style="display:none;">
                            <figure class="highcharts-figure">
                                <div class="d-flex flex-row-reverse">
                                  <button id='2020' class="btn btn-outline-primary">2024</button>
                                </div>
                                <div id="videos-container"></div>
                            </figure>
                        </div>
                        <div class="card-body tabClassChart" id="btnChartShared" style="display:none;">
                            <figure class="highcharts-figure">
                                <div class="d-flex flex-row-reverse">
                                  <button id='2020' class="btn btn-outline-primary">2024</button>
                                </div>
                                <div id="audios-container"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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


