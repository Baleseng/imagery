@extends('layouts.admin')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
@section('content')

<div class="position-relative" style="top:50px">
<div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-3 ">
  <label for="subCategoryCode">TO :</label>
  <div class="input-group">
    
    <input type="text" class="form-control" aria-label="Text input with dropdown button" name="To" id="To">
    
    <div class="input-group-append">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
      <ul class=" checkbox-menu allow-focus" aria-labelledby="">

        <li><label> <input type="checkbox"
                     value="draj.121@gmail.com"> Dheeraj
               </label></li>

        <li><label> <input type="checkbox"
                     value="raju.45@gmail.com"> Raju
               </label></li>

        <li><label> <input type="checkbox"
                     value="ravi456@gmail.com"> Ravi
               </label></li>


      </ul>
    </div>
  </div>
</div>
</div>


@endsection

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous"></script>
  
<script type="text/javascript">

   $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
  $(this).closest("li").toggleClass("active", this.checked);
   var sList = "";
   $('input[type=checkbox]').each(function () {
      if(this.checked) {
         sList += $(this).val() + ","
      }
   });
  
  $("#To").val(sList.slice(0,-1));
});

$(document).on('click', '.allow-focus', function(e) {
  e.stopPropagation();
});
   
</script>
