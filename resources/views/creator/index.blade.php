@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid">
    <div class="row justify-content-center">
        
        @include('includes.admin.upload-btn')

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-body">
                            <div class="col" style="display:inline-block; vertical-align: middle;">1</div>
                            <div class="col" style="display:inline-block; vertical-align: middle;">
                                <div class="border-start border-primary border-3" style="height:100px;"></div>
                            </div>
                            <div class="col" style="display:inline-block; vertical-align: middle;">2</div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 rounded-0">
                        <div class="card-body">
                            <div class="col-5" style="display:inline-block; vertical-align: middle;">
                                <h6>Unpaid Earnings</h6>
                                <h1>R0</h1>
                                <span>*Upload approximately every 15 minutes</span>

                            </div>
                            <div class="col mx-3" style="display:inline-block; vertical-align: middle;">
                                <div class="border-start border-primary border-3" style="height:100px;"></div>
                            </div>
                            <div class="col-5" style="display:inline-block; vertical-align: middle;">
                                <p>Payment calculated at the end of every month for contributors who meet their minimum payout amoount</p>
                                <a href="">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('includes.admin.upload-index')

            <div class="row">
                <div class="col-md-0 mt-4">
                    <div class="card shadow-sm border-0 rounded-0">
                      <div class="card-body">Content-Status</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function tabBtn(tabId) {
    var i;
    var x = document.getElementsByClassName("tabClass");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    document.getElementById(tabId).style.display = "block";
  }
</script>
@endsection
