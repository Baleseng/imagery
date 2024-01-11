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

        <div class="col-9" style="height:50px;">
            <div class="row">
                <div class=""></div>
                
            </div>
            
            <div class="row">
                
                <div class="col-md-0 mt-4">

                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-header">Performance</div>
                         <div class="card-body">
                             <figure class="highcharts-figure">
                                <div class="d-flex flex-row-reverse">
                                  <button id='2020' class="btn btn-outline-primary">2024</button>
                                </div>
                                <div id="file-container"></div>
                            </figure>
                         </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
Highcharts.chart('file-container', {
    chart: {type: 'column'},
    title: {text: 'Annual Perfomance'},
    xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']},
    credits: {enabled: true},
    plotOptions: {
        column: {borderRadius: '25%'}
    },
    series: [
        {name: 'Views',data: [2, 1, 4, 2, 2, 1, 3, 4, 1, 2, 1, 1]},
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
