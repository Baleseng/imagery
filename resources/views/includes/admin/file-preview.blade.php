<div class="col-9" >
            <div class="row">
                <div class="col-lg-7 border">
                  <div class="btn mt-2 mx-auto col-12" role="group" aria-label="Basic outlined button group">
                    <a href="{{ url($url.'/edit/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="{{ url($url.'/region/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary"><i class="fa-solid fa-earth-africa"></i> Region</a>
                    <a href="{{ url('/creator') }}" class="btn btn-primary"><i class="fa-solid fa-cubes-stacked"></i> Dashboard</a>
                  </div>
                  <div class="mx-auto my-3 col-9 border overflow-hidden" >
                    <img src="{{ url('storage/images/'.$id->name) }}" class="object-fit-fill" style="width:100%;">
                  </div>

                </div>
                <div class="col-lg-5">
                  <div class="shadow-sm p-3 bg-white rounded">
                    @include('includes.admin.file-package-commercial')
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="card shadow-sm mt-4 p-0 border-0 rounded-0">
                    <div class="card-header">Photo Detail </div>
                    <div class="card-body d-flex flex-row">
                        <div class="col-lg-3">
                          <img src="{{ URL::asset('images/temp-img.jpg') }}" class="d-block mx-auto col-5 pb-3">
                          <p class="text-center">{{ Auth::user()->name }}</p> 
                          <p class="text-center">Nature Photographer</p> 
                        </div>

                        <div class="vr mx-3"></div>

                        <div class="col-lg-4">

                            <p class="text-secondary">Description: 
                                <span class="d-block text-dark text-capitalize">{{ $id->description }}</span>
                            </p>
                            <p class="text-secondary">Used Keywords: 
                                <span class="d-block text-dark text-capitalize">{{ $id->keywords }}</span>
                            </p>
                            <p class="text-secondary">Status: 
                                <span class="d-block text-dark text-capitalize">{{ $id->status }}</span>
                            </p>
                            <p class="text-secondary">Used For: 
                                <span class="d-block text-dark text-capitalize">{{ $id->usage }}</span>
                            </p>
                            <p class="text-secondary">Catergory: 
                                <span class="d-block text-dark text-capitalize">{{ $id->category }}</span>
                            </p>
                            <p class="text-secondary">Last Updated: 
                                <span class="d-block text-dark text-capitalize">{{ $id->updated_at }}</span>
                            </p>
                            <p class="text-secondary">Date Created: 
                                <span class="d-block text-dark text-capitalize">{{ $id->created_at }}</span>
                            </p>

                        </div>

                        <div class="vr mx-3"></div>

                        <div class="col-lg-4">
                            

                            <form>
                                <div class="form-group">
                                    <label for="comment">Make notes</label>
                                    <input type="hidden" value="{{ $id->id }}" name="file_id"/>
                                    <textarea class="form-control border border-" rows="8" id="comment"></textarea>
                                    <button class="btn btn-primary mt-2">Comment</button>
                                </div> 
                            </form>

                        </div>

                    </div>
                     
                </div>
            </div>
            
            <div class="row">
                
                    <div class="card shadow-sm mt-4 p-0 border-0 rounded-0">
                        <div class="card-header">Photo Performance</div>
                         <div class="card-body">
                             <figure class="highcharts-figure">
                                <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-2025-tab" data-bs-toggle="tab" href="#nav-2024" role="tab" aria-controls="nav-2024" aria-selected="true">2024</a>
                                    <a class="nav-link disabled" id="nav-2025-tab" data-bs-toggle="tab" href="#nav-2025" role="tab" aria-controls="nav-2025" aria-selected="false">2025</a>
                                    <a class="nav-link disabled" id="nav-2026-tab" data-bs-toggle="tab" href="#nav-2026" role="tab" aria-controls="nav-2026" aria-selected="false">2026</a>
                                </nav>

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-2024" role="tabpanel" aria-labelledby="nav-2024-tab">
                                        <div id="photo-container"></div>
                                    <div>
                                    <div class="tab-pane fade" id="nav-2025" role="tabpanel" aria-labelledby="nav-2025-tab"></div>
                                    <div class="tab-pane fade" id="nav-2026" role="tabpanel" aria-labelledby="nav-2026-tab"></div>
                                </div>
                            </figure>
                         </div>
                    </div>
                

            </div>

        </div>