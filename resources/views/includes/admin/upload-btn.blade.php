<div class="col-md-3">
  

   <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#upLoad" style="width:100%;"><i class="fa-solid fa-upload"></i> Upload</button>
   <!-- The Modal -->
       <div class="modal" id="upLoad">
           <div class="modal-dialog">
               <div class="modal-content">
               <!-- Modal Header -->
                   <div class="modal-header">
                       <h4 class="modal-title">Upload</h4>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>

                   <!-- Modal body -->
                   <div class="modal-body">
                       <div class="container">
                           <div class="row">
                            <div class="">
                                <form method="POST" action="{{ url('creator')}}">
                                  {{ csrf_field() }}

                                    <div class="mb-3">
                                      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                      <input class="form-control" name="status" type="file" id="formFileMultiple" multiple>
                                    </div>

                                    <input type="hidden" value="{{ Auth::user()->id }}" name="owner_id"/>
                                    <input type="hidden" value="review" name="status"/>
                                    <div class="my-3">
                                        <a class="link-light link-offset-2 border rounded-3 bg-primary p-2" href="{{ url('creator/add') }}">Next</a>
                                    </div>
                         
                                </form>
                            </div>
                                
                           </div> 
                       </div>
                   </div>
                   <!-- Modal footer -->
                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                   </div>
               </div>
           </div>
       </div>
   
   
       <div class="card shadow-sm border-0 rounded-0">
           <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ url('/creator') }}" class=""><i class="fa-solid fa-cubes-stacked"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/creator/earnings') }}"><i class="fa-solid fa-arrow-trend-up"></i> Earnings</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/creator/portfolio') }}"><i class="fa-solid fa-briefcase"></i> Portfolio</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/creator/insight') }}"><i class="fa-solid fa-chart-simple"></i> Insight</a>
                    </li>
                </ul>
           </div>
       </div>
  
</div>