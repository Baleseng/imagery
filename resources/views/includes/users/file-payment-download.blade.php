<h5>Download image</h5>

<form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">

@csrf

  <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
  <input type="hidden" value="{{ $id->creator_id }}" name="creator_id"/>
  <input type="hidden" value="{{ $id->id }}" name="file_id">

  <input type="hidden" value="{{ $id->title }}" name="title">
  <input type="hidden" value="{{ $id->description }}" name="description">
  <input type="hidden" value="{{ $id->file_name }}"  name="file">
  <input type="hidden" value="1" name="quantity">
  <input type="hidden" value="download" name="type">

  <ul class="list-group rounded-0">
    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="449" name="price" id="btnRadio1" autocomplete="on" checked>
      <label class="btn btn-outline-secondary col-12" for="btnRadio1">
        <span class="d-inline-block col-0"></span>
        <span class="d-inline-block col-9 text-start">
          <p class="fs-5 my-0 fw-bold">ZAR449 for this image</p>
          <p class="my-0" style="font-size:11px;">5 images for ZAR449, download within a year</p>
        </span>
      </label>

    </li>
    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="249" name="price" id="btnRadio2" autocomplete="off">
      <label class="btn btn-outline-secondary col-12" for="btnRadio2">
        <span class="d-inline-block col-0"></span>
        <span class="d-inline-block col-9 text-start">
          <p class="fs-5 my-0 fw-bold">ZAR249 for this image</p>
          <p class=" my-0" style="font-size:11px;">10 images for ZAR249, download within a year</p>
          <button class="link link-primary border-0 bg-light" style="font-size:10px;">Read Terms & Condition</button>
        </span>
      </label>
    </li>
  </ul>

   <div class="d-grid gap-2 my-3" id="banner-message">
     <button class="py-3 text-white text-sm bg-primary border-0 rounded">Download</button>
     <a href="{{ url('/pricing') }}" class="btn btn-light btn-outline-secondary" type="button">View plans and prices</a>
   </div>
              
</form>