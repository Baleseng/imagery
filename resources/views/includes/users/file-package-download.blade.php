<h5>Download image</h5>
<form method="POST" action="{{ url('user')}}">
{{ csrf_field() }}

  
     <ul class="list-group rounded-0">
       <li class="list-group-item my-0 border-0">
         <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio1" autocomplete="on" checked>
         <label class="btn btn-outline-secondary col-12" for="btnRadio1">
           	<span class="d-inline-block col-0"></span>
           	<span class="d-inline-block col-9 text-start">
           		<p class="fs-5 my-0">ZAR59 for this image</p>
           		<p class="my-0" style="font-size:11px;">5 images for ZAR449, download within a year</p>
           	</span>
         </label>
       </li>
       <li class="list-group-item my-0 border-0">
         <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio2" autocomplete="off">
         <label class="btn btn-outline-secondary col-12" for="btnRadio1">
           	<span class="d-inline-block col-0"></span>
           	<span class="d-inline-block col-9 text-start">
           		<p class="fs-5 my-0">ZAR33 for this image</p>
           		<p class=" my-0" style="font-size:11px;">10 images for ZAR249, download within a year</p>
           		<button class="link link-primary border-0 bg-light" style="font-size:10px;">Read Terms & Condition</button>
           	</span>
         </label>
       </li>
     </ul>

     <div class="d-grid gap-2 my-3">
       <button class="btn btn-primary" type="button">Download</button>
       <a href="{{ url('/pricing') }}" class="btn btn-light btn-outline-secondary" type="button">View plans and prices</a>
     </div>
                

</form>