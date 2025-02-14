
	
	
		@guest
			@if(Route::has('login'))
				
            <div class="filterDiv {{ $content->category }} text-light w-100 text-decoration-none show">
             	<div class="col-12 position-relative overflow-hidden hover my-2">
             		
             		<img src="{{ url('storage/images/'.$content->file_name) }}" class="col-12 images"/>

             		<div class="middle">

	             		<a href="{{ url('/file/'.$content->id) }}" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
	             			<h6 class="w-50 mb-1 p-2 text-truncate roboto-light">{{ $content->title }} </h6>	
	             		</a>

	             		<div class="position-absolute" style="top:3%; right:5%;">
	             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-heart"></i>
             				</a>
             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-bookmark"></i>
             				</a>
             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-file-{{ $content->type }}"></i>
             				</a>
  									
	             		</div>

	             		<div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
						<a href="#" class="p-3  text-light text-decoration-none" style="font-size:15px;"> 
							<i class="fa-solid fa-layer-group"></i> Similar
						</a>
					</div>

             		</div>
             		
             	</div>
          </div>

			@endif
			@else
				
		<div class="filterDiv {{ $content->category }} text-light w-100 text-decoration-none show">
             	<div class="col-12 position-relative overflow-hidden hover my-2">
             		
             		<img src="{{ url('storage/images/'.$content->file_name) }}" class="col-12 images"/>

             		<div class="middle">

	             		<a href="{{ url('/file/'.$content->id) }}" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
	             			<h6 class="w-50 mb-1 p-2 text-truncate roboto-light">{{ $content->title }} </h6>	
	             		</a>

	             		<div class="position-absolute" style="top:3%; right:5%;">
	             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-heart"></i>
             				</a>
             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-bookmark"></i>
             				</a>
             			
						<a href="#" class="text-light border border-1 border-white rounded py-1 px-2 mx-1 text-decoration-none text-center" style="font-size:18px;"><i class="fa-regular fa-file-{{ $content->type }}"></i>
             				</a>
  									
	             		</div>

	             		<div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
						<a href="#" class="p-3  text-light text-decoration-none" style="font-size:15px;"> 
							<i class="fa-solid fa-layer-group"></i> Similar
						</a>
					</div>

             		</div>
             		
             	</div>
          </div>

		@endguest

		



