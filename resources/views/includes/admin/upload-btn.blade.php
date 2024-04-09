<div class="col-md-3">
   
   <div class="card shadow-sm border-0 rounded-0 position-sticky" style="top:4em;">
    
        <a href="{{ url('/creator/add') }}" class="btn btn-primary mb-2" data-bs-target="#upLoad" id="demo" style="width:100%;"><i class="fa-solid fa-upload"></i> Upload</a>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ url($url) }}" class=""><i class="fa-solid fa-chart-simple px-1"></i> Dashboard</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url($url.'/earnings') }}"><i class="fa-solid fa-arrow-trend-up px-1"></i> Earnings</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url($url.'/portfolio') }}"><i class="fa-solid fa-briefcase px-1"></i> Portfolio</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url($url.'/insight') }}"><i class="fa-solid fa-lightbulb px-1"></i> Insight</a>
                </li>
            </ul>
        </div>

        
   </div>
  
</div>