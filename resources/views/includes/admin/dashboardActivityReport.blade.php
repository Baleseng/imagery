<div class="row">
    <div class="col-6 text-bg-primary">Page</div>
    <div class="col-1 text-bg-primary">Views</div>
    <div class="col-1 text-bg-primary">Links</div>
    <div class="col-1 text-bg-primary">Button</div>
    <div class="col-2 text-bg-primary text-center">Report</div>
    <div class="col-1 text-bg-primary"></div>
</div>

<div id="content-5" class="">
    
    @foreach ($live->take(18) as $content)
    <div class="row">
        <div class="col-6 border"><p class="text-truncate">{{ $content->page_url }}</p></div>

        <div class="col-1 border"><p>{{ $content->page_views }}</p></div>
        <div class="col-1 border"><p>{{ $content->button_clicks }}</p></div>
        <div class="col-1 border"><p>{{ $content->href_clicks }}</p></div>


        <div class="col-2 border align-middle text-center py-1"> 
            
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

        <div class="col-1 border text-center align-middle py-1">    
            <span id="navbarDropdown" class="link-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa-solid fa-ellipsis-vertical fs-3"></i></span>
            <div class="dropdown-menu dropdown-menu-end text-primary" ari py-4a-labelledby="navbarDropdown">
                
                <span class="dropdown-item"><a href="{{ url($url.'/report/'.$content->id) }}" class="col-1  text-decoration-none">Report in Details</a></span>

                <span class="dropdown-item"> {{ $content->created_at }}</span>
            </div>
        </div>
    </div>
    
    @endforeach
    <div class="row">
        <div class="">
            <a class=" btn btn-primary mt-2 rounded-0" href="{{ url($url.'/reports/') }}">More Report</a>
        </div>
    </div>
    

</div>

