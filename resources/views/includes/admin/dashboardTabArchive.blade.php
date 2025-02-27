<div class="row">
    <div class="col-1 text-bg-primary text-center">Flag</div>
    <div class="col-1 text-bg-primary text-center">Image</div>
    <div class="col-4 text-bg-primary text-center">Title</div>
    <div class="col-2 text-bg-primary text-center">Usage</div>
    <div class="col-3 text-bg-primary text-center">Category</div>
    <div class="col-1 text-bg-primary text-center"></div>
</div>
<div id="content-5" class="custom-scrollbar-js custom-scrollbar-css">
        
    @foreach ($archives as $content)
    <div class="row">
        <div class="col-1 border text-center align-middle">
            <img src="{{ URL::asset('images/africa/' . $content->file_country .'.svg') }}" class=" img-thumbnail mx-auto border-0" style="width:40px;">
        </div>

        <div class="col-1 border text-center align-middle overflow-hidden" style="height:35px;">
            <img src="{{ url('storage/images/'.$content->file_name) }}" class="img-thumbnail mx-auto border-0 col-12 ">
        </div>

        <div class="col-4 border text-center align-middle py-1">
            <a class="link-primary dropdown-item text-truncate" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}">{{ $content->file_title }}</a>
        </div>

        <div class="col-2 border text-center text-capitalize align-middle">{{ $content->file_usage }}</div>
        
        <div class="col-3 border text-center align-middle py-1 text-truncate">
            {{ $content->file_category }}
        </div>

        <div class="col-1 border text-center align-middle py-1">    
            <span id="navbarDropdown" class="link-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa-solid fa-ellipsis-vertical fs-3"></i></span>
            <div class="dropdown-menu dropdown-menu-end text-primary" ari py-4a-labelledby="navbarDropdown">
                
                <a class="link-primary dropdown-item" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-eye"></i> Preview</a>
                
                <a class="link-primary dropdown-item" href="{{ url($url.'/edit/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                
                <a class="link-primary dropdown-item" href="{{ url($url.'/region/'.$content->id . '-' . str_replace(' ', '-', $content->file_title)) }}"><i class="fa-solid fa-earth-africa"></i> Region</a>
                
                <span class="dropdown-item text-capitalize"><i class="fa-solid fa-folder-closed"></i> {{ $content->file_type }}</span>
                <span class="dropdown-item"><i class="fa-regular fa-calendar"></i> {{ date('d M Y', strtotime($content->created_at)) }}</span>
            </div>
        </div>
    </div>
    @endforeach

</div>
