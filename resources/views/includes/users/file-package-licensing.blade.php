<h5 class="text-secondary">Licensing image</h5>

<span>Choose suitable licensing package below</span> 

<form action="{{ route('cart.add',['fileId' => $id->id]) }}" method="POST" class="flex justify-end">

@csrf 

  <ul class="list-group rounded-0">
    <li class="list-group-item my-0 border-0">
      @include('includes.users.file-package-licensing-standard')
    </li>
  </ul>
     
  <input type="hidden" value="1" min="1" name="file_quantity">
  <input type="hidden" value="{{ $id->creator->id }}" name="creator_id"/>

  <div class="d-grid gap-2 my-3">
    <button class="py-3 text-white text-sm bg-primary border-0 rounded">Add To Cart</button>
    <a href="{{ url('/commercial') }}" class="btn btn-light btn-outline-danger fs-5 fw-bold" type="button">
      Custom Licensing
    </a>
  </div>
</form>

<p class="my-0" style="font-size:11px;">Offset images aren't included in image subscriptions or on-demand packs. You can license and pay for them separately.</p>