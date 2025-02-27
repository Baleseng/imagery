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

            <input type="hidden" value="archive" name="file_status">
            
            <input type="hidden" value="{{ $id->file_type }}" name="file_type">
            <input type="hidden" value="{{ $id->file_title }}" name="file_title">
            <input type="hidden" value="{{ $id->file_usage }}" name="file_usage">
            <input type="hidden" value="{{ $id->file_country }}" name="file_country">
            <input type="hidden" value="{{ $id->file_category }}" name="file_category">
            <input type="hidden" value="{{ $id->file_name }}" name="file_name">
            <input type="hidden" value="{{ Auth::user()->id }}" name="admin_id"/>
            <input type="hidden" value="{{ $id->creator_id }}" name="creator_id">
            <input type="hidden" value="{{ $id->file_description }}" name="file_description">
            <input type="hidden" value="{{ $id->file_orientation }}" name="file_orientation">

            <input type="hidden" value="{{ $id->file_keyword }}" name="file_keyword">
            <input type="hidden" value="{{ $id->file_enhance }}" name="file_enhance">
            <input type="hidden" value="{{ $id->file_standard }}" name="file_standard">
            <input type="hidden" value="{{ $id->file_extended }}" name="file_extended">
            <input type="hidden" value="{{ $id->file_editorial }}" name="file_editorial">

            <button class="btn btn-danger">Archive</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>