
    <div class="row">
        <div class="col-2 text-bg-primary text-center ">Last Update</div>
        <div class="col-1 text-bg-primary text-center">Images</div>
        <div class="col-3 text-bg-primary text-center">Title</div>
        <div class="col-2 text-bg-primary text-center">Status</div>
        <div class="col-1 text-bg-primary text-center">Type</div>
        <div class="col-2 text-bg-primary text-center">Categoty</div>
        <div class="col-1 text-bg-primary text-center"></div>
    </div>
    <div class="row">
        <div class="col-2 border text-center py-4">01/01/2024</div>
        <div class="col-1 border text-center align-middle">
            <img src="{{ URL::asset('images/temp-img.jpg') }}" class="d-block mx-auto my-2 col-12">
        </div>
        <div class="col-3 border text-center align-middle py-4"><a href="{{ url('/creator/file') }}">Business Development</a></div>
        <div class="col-2 border text-center align-middle py-4">Submit</div>
        <div class="col-1 border text-center align-middle py-4">JPG</div>
        <div class="col-2 border text-center align-middle py-4">Business</div>
        <div class="col-1 border text-center align-middle py-4 px-4">
            
            <button id="navbarDropdown" class="nav-link ]" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa-solid fa-ellipsis-vertical fs-3"></i></button>

            <div class="dropdown-menu dropdown-menu-end" ari py-4a-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/creator/edit') }}" ><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a class="dropdown-item" href="{{ url('/creator/region') }}" ><i class="fa-solid fa-earth-africa"></i> Region</a>
                <a class="dropdown-item" href="#" ><i class="fa-solid fa-folder-closed"></i> Archive</a>
            </div>

        </div>
    </div>
