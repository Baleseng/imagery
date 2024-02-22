<div class="col-6">
    <h4 class="text-center mb-5">Upload Your File</h4>
    @if ($message = Session::get('success'))
    <div class="alert alert-success"><strong>{{ $message }}</strong></div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">

            <div id="drop-area" class="border rounded position-relative" style="min-height: 200px; cursor: pointer;">
                                                    
                <div class="opacity-50 text-center position-absolute top-50 start-50 translate-middle">
                    <label for="selectImage" class="custom-file-input form-control text-secondary ">
                        <i class="fa-solid fa-cloud-arrow-up fs-1"></i>
                        <div class="">upload file</div>
                    </label>
                    <input type="file" name="file" value="{{ $id->file_name }}" id="selectImage" hidden>
                </div>

                <div class="img">
                    <img id="preview" src="{{ url('storage/images/'.$id->file_name) }}" alt="your image" class="rounded-1" style="width: 100%; height:auto;" />
                </div>

            </div>

        </div>
    </div>

</div>

<div class="vr mx-4 p-0"></div>

<div class="col-5">
    
    <div class="mb-3">
        <label for="imageTypeCheckboxInput" class="form-label fw-bold d-block">File Type</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">    
            <input type="radio" class="btn-check" name="type" value="photo"  id="btnRadio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnRadio1">Photo</label>

            <input type="radio" class="btn-check" name="type" value="video" id="btnRadio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnRadio2">Video</label>

            <input type="radio" class="btn-check" name="type" value="audio" id="btnRadio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnRadio3">Audio</label>
        </div>
    </div> 

    <div class="mb-3">
        <label for="usageCheckboxInput" class="form-label fw-bold d-block">Usage</label>
        <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="usage" value="commercial" id="option3" autocomplete="off" checked onclick="show2()">
            <label class="btn btn-outline-primary" for="option3">Commercial</label>

            <input type="radio" class="btn-check" name="usage" value="download" id="option4" autocomplete="off" onclick="show1()">
            <label class="btn btn-outline-primary" for="option4">Download</label>
        </div>  
    </div>

    

    