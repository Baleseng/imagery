<div class="col-md-3">
  

   <a href="{{ url('/creator/add') }}" class="btn btn-primary mb-2" data-bs-target="#upLoad" style="width:100%;"><i class="fa-solid fa-upload"></i> Upload</a>
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
                            

                                <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                                  <h3 class="text-center mb-5">Upload File in Laravel</h3>
                                     @csrf
                                     @if ($message = Session::get('success'))
                                     <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                     </div>
                                     @endif
                                     @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                           <ul>
                                              @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              @endforeach
                                           </ul>
                                        </div>
                                     @endif

                                    <div class="card">
                                        <div class="card-body">
                                            <div id="drop-area" class="border rounded d-flex justify-content-center align-items-center"
                                                style="height: 200px; cursor: pointer;">
                                                <div class="text-center">
                                                    <i class="bi bi-cloud-arrow-up-fill text-primary" style="font-size: 48px;"></i>
                                                    <input type="file" name="file" class="custom-file-input" id="chooseFile" class="form-control">
                                                    <p class="mt-3">Drag and drop your image here or click to select a file.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ Auth::user()->id }}" name="creator_id"/>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Upload Files</button>

                                 </form>

    
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