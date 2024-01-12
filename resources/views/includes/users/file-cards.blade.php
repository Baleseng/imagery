<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
	<div class="card border-0">
		
		<div class="card-body border-0 border-top border-start border-end rounded-top">
			
		</div> 
		@guest
			@if(Route::has('login'))
		<a href="{{ url('/login') }}">
			<img src="{{ URL::asset('images/temp-img.jpg') }}" class="border rounded-0" style="width:100%;">
		</a>
		@endif
		@else
		<a href="{{ url('/file') }}">
			<img src="{{ URL::asset('images/temp-img.jpg') }}" class="border rounded-0" style="width:100%;">
		</a>
		@endguest
		


		<div class="card-footer border">
		@guest
			@if(Route::has('login'))
			<span class="btn btn-secondary">
				<a href="{{ url('/login') }}" class="link-light link-offset-2 link-underline link-underline-opacity-0">Buy</a>
			</span>
			@endif
			@else
			<span class="btn btn-secondary ">
				<a href="{{ url('/pricing') }}" class="link-light link-offset-2 link-underline link-underline-opacity-0">Buy</a>
			</span>
		@endguest
		</div>
	</div>
</div>
