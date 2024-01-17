<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
	<div class="card border-0">
	
		@guest
			@if(Route::has('login'))
			<a href="{{ url('/login') }}">
				<img src="{{ URL::asset('images/temp-img.jpg') }}" class="border rounded-3" style="width:100%;">
			</a>
			@endif
			@else
			<a href="{{ url('/file') }}">
				<img src="{{ URL::asset('images/temp-img.jpg') }}" class="border rounded-3" style="width:100%;">
			</a>
		@endguest

	</div>
</div>
