<h5 class="text-secondary">Licensing image</h5>

<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">

@csrf 

  <input type="hidden" value="{{ $id->id }}" name="id">
  <input type="hidden" value="{{ $id->title }}" name="name">
  <input type="hidden" value="{{ $id->file_name }}"  name="image">
  <input type="hidden" value="1" name="quantity">
  
   
  <ul class="list-group rounded-0">
    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="49" name="price" id="btnRadio1" autocomplete="on" checked>
      <label class="btn btn-outline-secondary col-12" for="btnRadio1">
        <div class="col-12 text-start fs-5 position-relative fw-bold">
          Standards licence 
          <span class="position-absolute end-0 align-top fw-bold">R49 <small class="fw-light">per image</small></span>
        </div>
        <span class="col-12 text-start">
          <p class="fw-bold lh-1">Permitted Uses: <small class="fw-light">Web and digital usage, print materials (up to 500,000 copies), editorial use, non-commercial projects.</small></p>
          <p class="fw-bold lh-1">Not Permitted: <small class="fw-light">Resale or distribution of the image on its own, use in trademarks or logos.</small></p>
        </span> 
      </label>
    </li>

    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="99" name="price" id="btnRadio2" autocomplete="off">
      <label class="btn btn-outline-secondary col-12" for="btnRadio2">
        <div class="col-12 text-start fs-5 position-relative fw-bold">
          Extended License 
          <span class="position-absolute end-0 align-top fw-bold ">R99 <small class="fw-light">per image</small></span>
        </div>
        <span class="col-12 text-start">
          <p class="fw-bold lh-1">Permitted Uses: <small class="fw-light">All Standard License uses, print materials with over 500,000 copies, use in merchandise for sale, templates for resale, multi-seat licenses.</small></p>
          <p class="fw-bold lh-1">Not Permitted: <small class="fw-light">Use in products for resale where the main value is the image itself.</small></p>
        </span>
      </label>
    </li>

    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="199" name="price" id="btnRadio3" autocomplete="off">
      <label class="btn btn-outline-secondary col-12" for="btnRadio3">
        <div class="col-12 text-start fs-5 position-relative fw-bold">
          Enhanced License:
          <span class="position-absolute end-0 align-top fw-bold">R199 <small class="fw-light">per image</small></span>
        </div>
        <span class="col-12 text-start">
          <p class="fw-bold lh-1">Permitted Uses: <small class="fw-light">All Standard and Extended License uses, unlimited print copies, use in TV, film, and other digital media, use in merchandise for resale, use in templates for resale.</small></p>
          <p class="fw-bold lh-1">Not Permitted: <small class="fw-light">Redistribution of the image on its own.</small></p>
        </span>
      </label>
    </li>

    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="299" name="price" id="btnRadio4" autocomplete="off">
      <label class="btn btn-outline-secondary col-12" for="btnRadio4">
        <div class="col-12 text-start fs-5 position-relative fw-bold">
          Enhanced License:
          <span class="position-absolute end-0 align-top fw-bold">R299 <small class="fw-light">per image</small></span>
        </div>
        <span class="col-12 text-start">
          <p class="fw-bold lh-1">Permitted Uses: <small class="fw-light">Use in news articles, documentaries, and other editorial content, non-commercial editorial projects.</small></p>
          <p class="fw-bold lh-1">Not Permitted: <small class="fw-light">Commercial use, including advertising and promotional materials.</small></p>
        </span>
      </label>
    </li>
  </ul>

  

  <div class="d-grid gap-2 my-3">
    <button class="py-3 text-white text-sm bg-primary border-0 rounded">Add To Cart</button>
    <a href="{{ url('/commercial') }}" class="btn btn-light btn-outline-danger fs-5 fw-bold" type="button">Custom Licensing</a>
  </div>
</form>



<p class="my-0" style="font-size:11px;">Offset images aren't included in image subscriptions or on-demand packs. You can license and pay for them separately.</p>