<div class="row">
    <div class="col-1 text-bg-primary text-center">#</div>
    <div class="col-1 text-bg-primary text-center">Flag</div>
    <div class="col-1 text-bg-primary text-center">Photo</div>
    <div class="col-5 text-bg-primary text-center">Title</div>
    <div class="col-1 text-bg-primary">Views</div>
    <div class="col-1 text-bg-primary">Links</div>
    <div class="col-1 text-bg-primary">Button</div>
    <div class="col-1 text-bg-primary text-center"></div>
</div>

<div id="content-5" class="custom-scrollbar-js custom-scrollbar-css">
      
    @foreach ($submits as $content)
    <div class="row">

        <div class="col-1 border"><span class="text-center align-middle d-block">{{ $content->id }}</span></div>

        <div class="col-1 border">
            <span class="text-center align-middle d-block">
                <img src="{{ URL::asset('images/africa/' . $content->file_country .'.svg') }}" class=" img-thumbnail mx-auto border-0" style="width:40px;">
            </span>
        </div>

        <div class="col-1 border">
            <span class="text-center align-middle d-block overflow-hidden"  style="height:30px;">
                 <div class="col-12 position-relative overflow-hidden hover d-flex justify-content-center align-items-center popular-img-col">
                    <img src="{{ url('storage/images/'.$content->file_name) }}" class="img-thumbnail mx-auto border-0 col-12 text-center align-middle d-block lh-2">
                </div>
            </span>
        </div>

        <div class="col-5 border text-center align-middle py-1">
            <a class="link-primary dropdown-item text-truncate" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}">{{ $content->file_title }}</a>
        </div>

        <div class="col-1 border">
            <span class="text-center align-middle d-block">{{ $content->page_views }}</span>
        </div>
        <div class="col-1 border">
            <span class="text-center align-middle d-block">{{ $content->button_clicks }}</span>
        </div>
        <div class="col-1 border">
            <span class="text-center align-middle d-block">{{ $content->href_clicks }}</span>
        </div>


        <div class="col-1 border text-center align-middle py-1">    
            <span id="navbarDropdown" class="link-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa-solid fa-ellipsis-vertical fs-3"></i></span>
            <div class="dropdown-menu dropdown-menu-end text-primary" ari py-4a-labelledby="navbarDropdown">
                
                <a class="btn btn-primary link-primary dropdown-item" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-eye"></i> Preview</a>

                
                <a class="link-primary dropdown-item" href="{{ url($url.'/edit/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                
                <a class="link-primary dropdown-item" href="{{ url($url.'/region/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-earth-africa"></i> Region</a>
                
                <span class="dropdown-item text-capitalize"> {{ $content->file_type }}</span>
                <span class="dropdown-item text-capitalize"> {{ $content->file_usage }}</span>
                <span class="dropdown-item text-capitalize"> {{ $content->file_category }}</span>

                <span class="dropdown-item"> {{ date('d M Y', strtotime($content->created_at)) }}</span>
            </div>
        </div>
    </div>
    @endforeach

</div>

