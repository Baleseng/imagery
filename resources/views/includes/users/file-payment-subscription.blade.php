<div class="col-md-5 order-md-2 mb-4">
      
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted roboto-bold">Order summery</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      
      <ul class="list-group mb-3">
        
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <span class="col-2"><img src="{{ url('storage/images/'.$id->file) }}" class="img-thumbnail"></span>
          <div class="col-8">
            <h6 class="my-0 roboto-regular">{{ $id->title }}</h6>
            <small class="text-muted roboto-light">{{ date('d M Y', strtotime($id->created_at)) }}</small>
          </div>
          <span class="roboto-medium text-muted">R {{ $id->price }}</span>
        </li>
        
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-R 0</span>
        </li>
        <li class="list-group-item list-group-item-action">      
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Total Amount Due (ZAR)</h6>
            <strong class="roboto-bold text-danger fs-4">R {{ $id->price }}</strong>
          </div>
          <small class="text-center d-block"><i>By purchasing you agree to the <a href="#">Imagery License Agreement</a>, or a separate written agreement in effect with Shutterstock.</i></small> 
        </li>

      </ul>

      <div class="list-group my-3">
        <div class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">365-day Subscription, Standard License with 10 Downloads p/m</h6>
            <span class="roboto-medium text-muted">
              R {{ $id->price }}
            </span>
          </div>
          <small>
            Standard License<br/>

            Annual commitment, billed monthly<br/>

            1 credit will be immediately deducted from the plan
          </small>

          <hr class="mb-3">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Subtotal</h6>
            <strong class="roboto-bold fs-6">R {{ $id->price }}</strong>
          </div>
          <hr class="mb-2">
        </div>
      </div>

      <div class="list-group my-3">
        <div class="list-group-item list-group-item-action">
          <small><b>365-day Subscription, Standard License with 10 Downloads per Month.</b> We will bill you monthly for 1 year. After that, your plan will be renewed for another 1 year commitment.</small>
          <small class="py-3 d-block">To cancel, please visit the <a href="#">Plans page.</a></small>
        </div>
      </div>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>

    </div>