<div class="row">
    <div class="col-2 text-bg-primary text-center">Post</div>
    <div class="col-3 text-bg-primary text-center">Comment</div>
    <div class="col-3 text-bg-primary text-center">Shared</div>
    <div class="col-3 text-bg-primary text-center">React</div>
    <div class="col-1 text-bg-primary text-center"></div>
</div>

        
    @foreach ($feed as $content)
    <div class="row">

        <div class="col-2 border text-center align-middle overflow-hidden" style="height:50px;">
            <img src="{{ url('storage/images/'.$content->file->file_name) }}" class="img-thumbnail mx-auto border-0 col-12 ">
        </div>

        <div class="col-3 border text-center align-middle">{{ $content->file_comment }}</div>
        <div class="col-3 border text-center align-middle">{{ $content->file_shared }}</div>
        <div class="col-3 border text-center align-middle">{{ $content->file_like }}</div>

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
