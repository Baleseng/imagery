<div class="row">
    <div class="col-2 text-bg-primary text-center">Country</div>
    <div class="col-6 text-bg-primary text-center">Title</div>
    <div class="col-3 text-bg-primary text-center">Last Update</div>
    <div class="col-1 text-bg-primary text-center"></div>
</div>
<div id="content-5" class="custom-scrollbar-js custom-scrollbar-css p-3">
    
@if(!empty($content))
<div class="text-center my-3"> Currently there is no notification</div>
@else
        
    @foreach ($reviews as $content)
    <div class="row">
        <div class="col-2 border text-center align-middle">
            <img src="{{ URL::asset('images/africa/' . $content->country .'.svg') }}" class=" img-thumbnail mx-auto border-0" style="width:40px;">
        </div>
        <div class="col-6 border text-center align-middle py-1">
            <a class="link-primary dropdown-item text-truncate" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->title)) }}">{{ $content->title }}</a>
        </div>
         <div class="col-3 border text-center align-middle">{{ date('d M Y', strtotime($content->created_at)) }}</div>
        <div class="col-1 border text-center align-middle py-1">    
            <span id="navbarDropdown" class="link-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa-solid fa-ellipsis-vertical fs-3"></i></span>
            <div class="dropdown-menu dropdown-menu-end text-primary" ari py-4a-labelledby="navbarDropdown">
                <a class="link-primary dropdown-item" href="{{ url($url.'/preview/'.$content->id . '-' . str_replace(' ', '-', $content->title)) }}"><i class="fa-solid fa-eye"></i> Preview</a>
                <a class="link-primary dropdown-item" href="{{ url($url.'/edit/'.$content->id . '-' . str_replace(' ', '-', $content->title)) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a class="link-primary dropdown-item" href="{{ url($url.'/region/'.$content->id . '-' . str_replace(' ', '-', $content->title)) }}"><i class="fa-solid fa-earth-africa"></i> Region</a>
                <a class="link-primary dropdown-item" href="#"><i class="fa-solid fa-folder-closed"></i> Archive</a>
                <span class="dropdown-item"><i class="fa-solid fa-folder-closed"></i> {{ $content->type }}</span>
                <span class="dropdown-item"><i class="fa-solid fa-folder-closed"></i> {{ $content->usage }}</span>
                <span class="dropdown-item"><i class="fa-solid fa-folder-closed"></i> {{ $content->category }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
