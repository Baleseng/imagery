
				<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
					<div class="card border-0">
						<div class="card-body p-0">
							<img src="{{ URL::asset('images/temp-img.jpg') }}" class="border rounded-top" style="width:100%;">
						</div> 

						<div class="card-footer border">
						@guest
							@if(Route::has('login'))
							<span><a href="{{ url('login/') }}">Buy</a></span>
							@endif
							@else
							<span><a href="{{ url('pricing/') }}">Buy</a></span>
						@endguest
						</div>
					</div>
				</div>
