<h5 class="text-secondary">Licensing image</h5>

<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">

@csrf 
     
  <ul class="list-group rounded-0">
    @include('includes.users.file-package-commercial-standard')
    @include('includes.users.file-package-commercial-extended')
    @include('includes.users.file-package-commercial-enhanced')
    @include('includes.users.file-package-commercial-editorial')
  </ul>

  <input type="hidden" value="{{ $id->id }}" name="id">
  <input type="hidden" value="{{ $id->creator_id }}" name="creator_id">
  <input type="hidden" value="{{ $id->title }}" name="name">
  <input type="hidden" value="{{ $id->file_name }}"  name="image">
  <input type="hidden" value="1" name="quantity">
  

  <div class="d-grid gap-2 my-3">
    <button class="py-3 text-white text-sm bg-primary border-0 rounded">Add To Cart</button>
    <a href="{{ url('/commercial') }}" class="btn btn-light btn-outline-danger fs-5 fw-bold" type="button">Custom Licensing</a>
  </div>
</form>



<p class="my-0" style="font-size:11px;">Offset images aren't included in image subscriptions or on-demand packs. You can license and pay for them separately.</p>