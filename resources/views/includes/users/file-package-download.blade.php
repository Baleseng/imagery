<h3 class="text-secondary">On-Demand Downloads</h3>

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
    <div class="border p-2">
      <p class="fs-6 my-0 fw-bold text-secondary">Single Image Download</p>
      
      <li class="list-group-item my-0 border-0">
        <input type="radio" class="btn-check" value="49" name="price" id="btnRadio1" autocomplete="on" checked>
        <label class="btn btn-outline-secondary col-12" for="btnRadio1">
          <div class="col-12 text-start fs-5 position-relative">
            High-Resolution Image
            <span class="position-absolute end-0 align-top fw-bold">ZAR 49</span>
          </div>   
        </label>
      </li>

      <li class="list-group-item my-0 border-0">
        <input type="radio" class="btn-check" value="78" name="price" id="btnRadio2" autocomplete="off">
        <label class="btn btn-outline-secondary col-12" for="btnRadio2">
           <div class="col-12 text-start fs-5 position-relative">
            Extended License
            <span class="position-absolute end-0 align-top fw-bold">ZAR 29 </span>
            <small class="fw-light">additional</small>
          </div>
        </label>
      </li>
    </div>

    <div class="border p-2 my-3">
      <p class="fs-6 my-0 fw-bold text-secondary">Pack of 5 Downloads:</p>

      <li class="list-group-item my-0 border-0">
        <input type="radio" class="btn-check" value="199" name="price" id="btnRadio3" autocomplete="off">
        <label class="btn btn-outline-secondary col-12" for="btnRadio3">
           <div class="col-12 text-start fs-5 position-relative">
            High-Resolution Image
            <span class="position-absolute end-0 align-top fw-bold">ZAR 199</span>
          </div>
        </label>
      </li>

      <li class="list-group-item my-0 border-0">
        <input type="radio" class="btn-check" value="298" name="price" id="btnRadio4" autocomplete="off">
        <label class="btn btn-outline-secondary col-12" for="btnRadio4">
           <div class="col-12 text-start fs-5 position-relative">
            Extended License
            <span class="position-absolute end-0 align-top fw-bold">ZAR 99</span>
          </div>
        </label>
      </li>
    </div>

  </ul>

   <div class="d-grid gap-2 my-3" id="banner-message">
     <button class="py-3 text-white text-sm bg-primary border-0 rounded">Download</button>
     <a href="{{ url('/pricing') }}" class="btn btn-light btn-outline-secondary" type="button">View plans and prices</a>
   </div>
              
</form>