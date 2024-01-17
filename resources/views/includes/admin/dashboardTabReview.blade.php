
    <div class="row">
        <div class="col-1 text-bg-primary text-center">Country</div>
        <div class="col-3 text-bg-primary text-center">Title</div>
        <div class="col-1 text-bg-primary text-center">Type</div>
        <div class="col-2 text-bg-primary text-center">Categoty</div>
        <div class="col-2 text-bg-primary text-center ">Last Update</div>
        <div class="col-1 text-bg-primary text-center"></div>
    </div>
    @foreach ($reviews as $content)
    <div class="row">
        <div class="col-1 border text-center align-middle">
            <img src="{{ URL::asset('images/africa/' . $content->country .'.svg') }}" class=" img-thumbnail mx-auto my-2">
        </div>
        <div class="col-3 border text-center align-middle py-4">
            <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#myModal">{{ $content->title }}</a>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                    <img src="{{ url('storage/images/' . $content->name) }}" class=" img-thumbnail mx-auto my-2">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-1 border text-center text-capitalize align-middle py-4">{{ $content->type }}</div>
        <div class="col-2 border text-center text-capitalize align-middle py-4">{{ $content->category }}</div>
        <div class="col-2 border text-center py-4">{{ date('d M Y', strtotime($content->created_at)) }}</div>
        <div class="col-1 border text-center align-middle py-4">
            
            <a href="#" id="navbarDropdown" class="link-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa-solid fa-ellipsis-vertical fs-3"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end text-primary" ari py-4a-labelledby="navbarDropdown">
                <a class="link-primary dropdown-item" href="{{ url('/creator/preview') }}" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-eye"></i> Preview</a>
                <a class="link-primary dropdown-item" href="{{ url('/creator/edit') }}" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a class="link-primary dropdown-item" href="{{ url('/creator/region') }}" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-earth-africa"></i> Region</a>
                <a class="link-primary dropdown-item" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-folder-closed"></i> Archive</a>
            </div>

        </div>
    </div>
    @endforeach
