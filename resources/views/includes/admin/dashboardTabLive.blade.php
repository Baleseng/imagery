<div class="row">
    <div class="col-1 text-bg-primary text-center ">#</div>
    <div class="col-6 text-bg-primary text-center">Page</div>
    <div class="col-2 text-bg-primary text-center">Click</div>
    <div class="col-3 text-bg-primary text-center">Date</div>
</div>

<div id="content-5" class="custom-scrollbar-js custom-scrollbar-css">
    
    @foreach ($live as $content)
    <div class="row">
        
        <div class="col-1 border text-center align-middle">{{ $content->id }}</div>
        <div class="col-6 border text-center align-middle">{{ $content->page_url }}</div>
        <div class="col-2 border text-center align-middle">{{ $content->button_id }}</div>
        <div class="col-3 border text-center align-middle">{{ $content->created_at }}</div>

    </div>
    @endforeach

</div>

