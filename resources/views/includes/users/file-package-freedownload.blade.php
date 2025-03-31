<h3 class="text-secondary">On-Demand Downloads</h3>

<form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">

@csrf

  <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
  <input type="hidden" value="{{ $id->creator_id }}" name="creator_id"/>
  <input type="hidden" value="{{ $id->id }}" name="file_id">
  <input type="hidden" value="1" name="file_quantity">
  <input type="hidden" value="download" name="file_type">

   <div class="d-grid gap-2 my-3" id="banner-message">
     <button class="py-3 text-white text-sm bg-primary border-0 rounded">Download</button>
   </div>
              
</form>

