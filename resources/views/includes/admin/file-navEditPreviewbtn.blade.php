<a href="{{ url($url) }}" class="btn btn-primary px-5"><i class="fa-solid fa-chart-simple"></i> Dashboard</a>
<a href="{{ url($url.'/preview/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-eye"></i> Preview</a>
<a href="{{ url($url.'/region/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-earth-africa"></i> Region</a>
<a href="{{ url($url.'/edit/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-file-pen"></i> Edit</a>
<a href="#" class="btn btn-danger px-5" data-toggle="modal" data-target="#myModal">Archive</a>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
   
        <div class="modal-body">
          <p>Sure you want to archive the  {{ $id->type }}</p>
          <form method="POST" action="">
               {{ method_field('PATCH') }}
               {{ csrf_field() }}

               <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/>

               <button class="btn btn-primary">Archive</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>