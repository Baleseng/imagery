        <div class="col-9" >
            <div class="row">
                <div class="card shadow-sm mt-4 p-0 border-0 rounded-0">
                    <div class="card-header">Admin Profile </div>
                    <div class="card-body d-flex flex-row">
                        <div class="col-lg-3">
                          <img src="{{ URL::asset('images/temp-img.jpg') }}" class="d-block mx-auto col-5 pb-3">
                          <p class="text-center">{{ Auth::user()->name }}</p> 
                          <p class="text-center">Nature Photographer</p> 
                        </div>

                        <div class="vr mx-3"></div>

                        <div class="col-lg-4">

                            <div class="text-secondary py-2">Email Address 
                                <span class="d-block text-dark text-capitalize">{{ $id->email }}</span>
                            </div>
                            <div class="text-secondary py-2">Mobile: 
                                <span class="d-block text-dark text-capitalize">{{ $id->mobile }}</span>
                            </div>

                

                            <div class="text-secondary py-2">About: 
                                <span class="d-block text-dark text-capitalize">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dignissim sapien. Vestibulum non ante elit. Nulla luctus augue et lorem volutpat rutrum eget eget quam. Aliquam blandit diam urna, et congue est porta quis. Etiam a neque id felis posuere maximus sit amet nec felis. Morbi velit justo, ultrices bibendum quam et, finibus aliquet tortor. Pellentesque quam ipsum, auctor id pellentesque quis, feugiat molestie ipsum. Aliquam lacinia porta orci et convallis.</p>
                                </span>
                            </div>
                           
                            <div class="text-secondary py-2">Admin Since: 
                                <span class="d-block text-dark text-capitalize">{{ $id->created_at }}</span>
                            </div>
                            
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