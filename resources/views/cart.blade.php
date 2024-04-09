@extends('layouts.app')

@section('content')


    @if ($message = Session::get('success'))
    <div class="p-4 mb-3 bg-blue-400 rounded">
        <p class="text-white">{{ $message }}</p>
    </div>
    @endif


    <div class="row py-5 p-4 bg-white rounded shadow-sm">
        
        <div class="col-lg-8">
            
            <div class="card">
                <div class="card-body">


                    
                    @foreach ($cartItems as $item)
                    <div class="row d-flex align-content-start flex-wrap bd-highlight mb-3">
                        <div class="col-2  text-center align-middle">    
                            <img src="{{ url('storage/images/'.$item->attributes->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm">                            
                            
                        </div>
                        <div class="col-5  text-center align-middle">{{ $item->name }}</div>
                        <div class="col-2  text-center align-middle py-1">R {{ $item->price }}</div>
                        <div class="col-1  text-center text-capitalize align-middle py-1">
                            {{ $item->quantity }}
                        </div>
                        <div class="col-2  text-center text-capitalize align-middle py-1">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id" class="">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                    <input type="hidden" value="{{ $item->name }}" name="title">
                    @endforeach
                </div>
            </div>

            <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
                <button class="btn btn-danger mt-3">Clear Carts</button>
            </form>
           
            <!-- End -->
        </div>
        
        <div class="col-lg-4">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Downloading and additional costs are calculated based on values you have entered.</p>
                    <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">

                        @csrf

                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                        <input type="hidden" value="{{ Cart::getTotal() }}" name="price">
                        <input type="hidden" value="licensing" name="type">
                        <input type="hidden" value="1" name="quantity">
                        
                        <ul class="list-unstyled mb-4">
                            
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">R {{ Cart::getTotal() }}</h5>
                            </li>
                        </ul>
                        <button class="py-3 text-white text-sm bg-primary border-0 rounded">Procceed to checkout</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

