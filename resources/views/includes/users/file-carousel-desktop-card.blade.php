<!-- Indicators -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#CarouselDesktop" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#CarouselDesktop" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
<div class="carousel-inner">
    
    

    <div class="carousel-item active">
        <div class="row">
            
            @foreach ($popular->take(3) as $content)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12">
                <div class="filterDiv text-light w-100 text-decoration-none show">   
                    <div class="col-12 position-relative overflow-hidden hover d-flex justify-content-center align-items-center popular-img-col">
                        
                        <img src="{{ url('storage/images/'.$content->file->file_name) }}" class="col-12 ">
            
                        <div class="middle">
                            <a href="" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
                                <h6 class="w-50 mb-1 p-2 text-truncate roboto-light"></h6>    
                            </a>

                            <div class="position-absolute" style="top:3%; right:5%;">   
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-heart"></i></a>
                            
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-bookmark"></i></a>
                            
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-file-"></i></a>            
                            </div>

                            <div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
                                <a href="#" class="p-3  text-light text-decoration-none" style="font-size:15px;"> 
                                <i class="fa-solid fa-layer-group"></i> Similar
                                </a>
                            </div>
                        </div>

                    </div>     
                </div>
            </div>
            @endforeach
            
        </div>
    </div>

    <div class="carousel-item">
        <div class="row">
            
            @foreach ($popular->take(3) as $content)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12">
                <div class="filterDiv text-light w-100 text-decoration-none show">   
                    <div class="col-12 position-relative overflow-hidden hover d-flex justify-content-center align-items-center popular-img-col">
                        
                        <img src="{{ url('storage/images/'.$content->file->file_name) }}" class="col-12 ">
            
                        <div class="middle">
                            <a href="" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
                                <h6 class="w-50 mb-1 p-2 text-truncate roboto-light"></h6>    
                            </a>

                            <div class="position-absolute" style="top:3%; right:5%;">   
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-heart"></i></a>
                            
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-bookmark"></i></a>
                            
                                <a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-file-"></i></a>            
                            </div>

                            <div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
                                <a href="#" class="p-3  text-light text-decoration-none" style="font-size:15px;"> 
                                <i class="fa-solid fa-layer-group"></i> Similar
                                </a>
                            </div>
                        </div>
                            
                    </div>     
                </div>
            </div>
            @endforeach
            
        </div>
    </div>  

    

</div>
<!-- Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#CarouselDesktop" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#CarouselDesktop" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>