<a href="#" class="btn btn-danger px-5" data-toggle="modal" data-target="#myModal">Archive</a>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
 
      <div class="modal-body">
        <p>Sure you want to archive the  {{ $id->type }}</p>
        <form method="POST" action="{{ url('admin/'.$id->id) }}">
            
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <input type="hidden" value="archive" name="status">
            
            <input type="hidden" value="{{ $id->type }}" name="type">
            <input type="hidden" value="{{ $id->title }}" name="title">
            <input type="hidden" value="{{ $id->usage }}" name="usage">
            <input type="hidden" value="{{ $id->country }}" name="country">
            <input type="hidden" value="{{ $id->category }}" name="category">
            <input type="hidden" value="{{ $id->file_name }}" name="file_name">
            <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/>
            <input type="hidden" value="{{ $id->creator_id }}" name="creator_id">
            <input type="hidden" value="{{ $id->description }}" name="description">
            <input type="hidden" value="{{ $id->orientation }}" name="orientation">

            <input type="hidden" value="{{ $id->keyword }}" name="keyword">
            <input type="hidden" value="{{ $id->enhance }}" name="enhance">
            <input type="hidden" value="{{ $id->standard }}" name="standard">
            <input type="hidden" value="{{ $id->extended }}" name="extended">
            <input type="hidden" value="{{ $id->editorial }}" name="editorial">

            <button class="btn btn-danger">Archive</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>