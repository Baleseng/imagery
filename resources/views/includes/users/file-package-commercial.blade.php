<h5>Licensing image</h5>

<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">

@csrf 

  <input type="hidden" value="{{ $id->id }}" name="id">
  <input type="hidden" value="{{ $id->title }}" name="name">
  <input type="hidden" value="{{ $id->file_name }}"  name="image">
  <input type="hidden" value="1" name="quantity">
  
   
  <ul class="list-group rounded-0">
    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="249" name="price" id="btnRadio1" autocomplete="on" checked>
      <label class="btn btn-outline-secondary col-12" for="btnRadio1">
        <div class="text-start fs-5">Standards licence </div>
        <span class="d-inline-block col-0"></span>
        <span class="d-inline-block mx-1 col-9 text-start">Limited usage in print, advertising, and packaging. Unlimited web distribution</span>
        <span class="d-inline-block align-top col-2 text-end">ZAR249</span>
      </label>

    </li>
    <li class="list-group-item my-0 border-0">
      <input type="radio" class="btn-check" value="349" name="price" id="btnRadio2" autocomplete="off">
      <label class="btn btn-outline-secondary col-12" for="btnRadio2">
        <div class="text-start fs-5">Enhanced license</div>
        <span class="d-inline-block col-0"></span>
        <span class="d-inline-block mx-1 col-9 text-start">Unlimited usage in print, advertising, packaging, and merchandising. Unlimited web distribution.</span>
        <span class="d-inline-block align-top col-2 text-end">ZAR349</span>
      </label>
    </li>
  </ul>

  

  <div class="d-grid gap-2 my-3">
    <button class="py-3 text-white text-sm bg-primary border-0 rounded">Add To Cart</button>
  </div>
</form>

<p class="my-0" style="font-size:11px;">Offset images aren't included in image subscriptions or on-demand packs. You can license and pay for them separately.</p>