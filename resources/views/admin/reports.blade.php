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
                @include('includes.admin.file-navPagesbtn')
           </div>
        </div>

        <div class="col-9">
            <div class="col-12 mb-4">
                <div class="card shadow-sm border-0 rounded-0">
                    <div class="card-header">

                        <nav class="d-flex flex-row nav nav-pills" id="pills-tab" role="tablist">
                            <span class="py-2 col-8">Activity Report</span>
                        </nav>
                    </div>

                     <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            
                            <div class="row">
                                <div class="col-1 text-bg-primary">#</div>
                                <div class="col-4 text-bg-primary">Page</div>
                                <div class="col-1 text-bg-primary">Views</div>
                                <div class="col-1 text-bg-primary">Anchore</div>
                                <div class="col-1 text-bg-primary">Button</div>
                                <div class="col-1 text-bg-primary text-center">Report</div>
                                <div class="col-2 text-bg-primary">Date</div>
                                <div class="col-1 text-bg-primary"></div>
                            </div>

                            <div id="content-5" class="custom-scrollbar-js custom-scrollbar-css" style="height: 45rem;">
                                
                                @foreach ($log as $content)
                                <div class="row">
                                    <div class="col-1 border align-middle py-1 text-capitalize">{{ $content->id }}</div>
                                    <div class="col-4 border align-middle py-1 text-truncate">{{ $content->page_url }}</div>
                                    <div class="col-1 border align-middle py-1 text-capitalize">{{ $content->page_views }}</div>
                                    <div class="col-1 border align-middle py-1 text-capitalize">{{ $content->href_clicks }}</div>
                                    <div class="col-1 border align-middle py-1 text-capitalize">{{ $content->button_clicks }}</div>
                                    <div class="col-1 border align-middle text-center py-1"> 
                                        
                                        <button type="button" class="btn py-0 rounded-0" id="{{ $content->event_type }}" data-bs-toggle="modal" data-bs-target="#erroReport">Error</button>            
                                        <!-- The Modal -->
                                        <div class="modal fade" id="erroReport">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Error Report</h4>
                                                        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            {{ $content->error_reporting }}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-2 border align-middle py-1">{{ $content->created_at }}</div>  
                                    <a href="{{ url($url.'/report/'.$content->id) }}" class="col-1 border text-center text-bg-primary text-decoration-none py-1">More</a>
                                </div>
                                
                                @endforeach
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
</div>

@endsection
