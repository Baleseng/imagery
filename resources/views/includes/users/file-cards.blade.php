
	
	
		@guest
			@if(Route::has('login'))
				
            <a href="{{ url('/login') }}" class="text-light w-100">
             	<div class="col-12 position-relative overflow-hidden hover my-2">
             		<img src="{{ url('storage/images/'.$content->file_name) }}" class="col-12 images" />

             		<div class="position-absolute top-0 start-0 w-100 h-100  middle">
             			<div class="bg-black"><h6 class="w-75 mb-1 p-2 text-truncate ">{{ $content->title }}</h6></div>
             			
             			<div class="bg-black">
             			<div class="position-absolute bottom-0 start-0">
						<a href="" class="p-3 fs-5 text-light text-decoration-none"> 
							<i class="fa-solid fa-layer-group"></i> Similar
						</a>
					</div>
					
					<div class="position-absolute bottom-0 end-0" id="demo">	
						<a href="#" class="p-3 fs-4 text-light">
							<i class="fa-solid fa-{{ $content->usage }}"></i>
						</a>
					</div>
					</div>

             		</div>
             		
             	</div>
            </a>

			@endif
			@else
				
		<div class="text-light w-100 text-decoration-none">
             	<div class="col-12 position-relative overflow-hidden hover my-2">
             		
             		<img src="{{ url('storage/images/'.$content->file_name) }}" class="col-12 images" />

             		<div class="middle">

	             		<a href="{{ url('/file/'.$content->id) }}" class="position-absolute top p-3 top-0 start-0 w-100 h-100 text-decoration-none text-light">
	             			
	             		
	             			<h5 class="w-75 mb-1 p-2 text-truncate roboto-light">{{ $content->title }}</h5>
	             			
						
	             		</a>

	             		<div class="position-absolute z-3 bottom-0 start-0 bottom py-3 w-100">
						<a href="https://www.google.com/" class="p-3 fs-6 text-light text-decoration-none"> 
							<i class="fa-solid fa-layer-group"></i> Similar
						</a>
					</div>

             		</div>
             		
             	</div>
          </div>

		@endguest

		



