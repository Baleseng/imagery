

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
            <input type="radio" class="btn-check" name="usage" value="licensing" id="option3" autocomplete="off" checked onclick="showCommercial2()">
            <label class="btn btn-outline-primary" for="option3">Licensing</label>

            <input type="radio" class="btn-check" name="usage" value="paiddownload" id="option4" autocomplete="off" onclick="showCommercial1()">
            <label class="btn btn-outline-primary" for="option4">Pay-to-Download</label>

            <input type="radio" class="btn-check" name="usage" value="freedownload" id="option5" autocomplete="off" onclick="showCommercial0()">
            <label class="btn btn-outline-primary" for="option5">Free-Download</label>
        </div>  
    </div>

    

    