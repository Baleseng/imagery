@extends('layouts.app')

@section('content')


    @if ($message = Session::get('success'))
    <div class="p-4 mb-3 bg-blue-400 rounded">
        <p class="text-white">{{ $message }}</p>
    </div>
    @endif

<div class="container-fluid position-relative mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 feed-container">
    <div class="row py-5 p-4 bg-white rounded shadow-sm">
        
        <div class="col-lg-8">
            
            <div class="card">
                <div class="card-body">


                    
                    @foreach ($cartItems as $item)
                    <div class="row d-flex align-content-start flex-wrap bd-highlight mb-3" id="removeCart">
                        <div class="col-2  text-center align-middle">    
                            <img src="{{ url('storage/images/'.$item->file->file_name) }}" alt="" width="70" class="col-12 images-fluid rounded">  
                        </div>
                        <div class="col-5  text-center align-middle">{{ $item->file->file_title }}</div>
                        <div class="col-2  text-center align-middle py-1">R {{ $item->file_price }}</div>
                        <div class="col-1  text-center text-capitalize align-middle py-1">
                            {{ $item->file_quantity }}
                        </div>

                        <div class="col-1  text-center align-middle py-1">
                           <!-- Remove Button -->
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="remove-from-cart-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>

                    </div>
                    <input type="hidden" value="{{ $item->name }}" name="title">
                    @endforeach
                </div>
            </div>

            
           
            <!-- End -->
        </div>
        
        <div class="col-lg-4">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Downloading and additional costs are calculated based on values you have entered.</p>
                    <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">

                        @csrf

                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                        <input type="hidden" value="{{ $item->file->creator_id }}" name="creator_id"/>
                        <input type="hidden" value="{{ $item->file->id }}" name="file_id"/>
                        <input type="hidden" value="{{ $item->file->file_usage }}" name="file_type"/>
                        <input type="hidden" value="{{ number_format($totalPrice, 2) }}" name="file_price">
                        <input type="hidden" value="1" name="file_quantity">
                        
                        <ul class="list-unstyled mb-4">
                            
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">R {{ number_format($totalPrice, 2) }}</h5>
                            </li>
                        </ul>
                        <button class="py-3 text-white text-sm bg-primary border-0 rounded">Procceed to checkout</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

