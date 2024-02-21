<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3 mx-0">
	<div class="card border-0">
	
		@guest
			@if(Route::has('login'))
				
				<a href="{{ url('/login') }}" style="
					color:#fff;
  					text-align:center;
  					background-image:url('{{ url('storage/images/'.$content->file_name) }}'); /* only thing changed was this line */
  					background-size:cover;
  					background-position:center;
  					padding-top:100px;
  					padding-bottom:100px;
  				">
					<!--<img src="{{ url('storage/images/'.$content->file_name) }}" class="border rounded-3" style="width:100%;">-->
				</a>

			@endif
			@else
				
				<a class="link-primary dropdown-item" href="{{ url('/file/'.$content->id . '-' . str_replace(' ', '-', $content->title)) }}" style="
					color:#fff;
  					text-align:center;
  					background-image:url('{{ url('storage/images/'.$content->file_name) }}'); /* only thing changed was this line */
  					background-size:cover;
  					background-position:top;
  					padding-top:100px;
  					padding-bottom:100px;
  					">
					<!--<img src="{{ url('storage/images/'.$content->file_name) }}" class="border rounded-3" style="width:100%;">-->
				</a>
				
		@endguest

	</div>
</div>
