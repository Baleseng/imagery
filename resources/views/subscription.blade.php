@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')

@section('content')

<div class="container position-relative" style="top:2rem">
    <div class="mx-auto col-12">
      
      <div class="text-center py-5">
        <h1 >Ideal pricing plan for your projects</h1>
        <h4>Tailored licensing options for unique requirements.</h3>
        <h6>Cost: Custom pricing based on negotiation</h6>
      </div>
      

      <div class="row">
        
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Basic Plan</h5>
                  
                  <br><br>
                  <span class="h2">ZAR 499</span>/month
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="Basic Package" name="title">
                    <input type="hidden" value="" name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="499" name="price">
                    <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Unlimited Downloads</button>
                  </form>



                </div>
                <ul class="list-group list-group-flush">
                  
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> 10 High-Resolution Downloads per month</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Additional Downloads: ZAR 40 each</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Access to Standard License</li>
        
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Professional Plan</h5>
                  
                  <br><br>
                  <span class="h2">ZAR 999</span>/month 
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="Small Business" name="title">
                    <input type="hidden" value="Some quick example text to build on the card title and make up the bulk of the card's content." name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="499" name="price">
                    <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Team Access</button>
                  </form>


                  <div class="my-2 text-danger">Everything in Basic Plan, PLUS</div>
                </div>

                <ul class="list-group list-group-flush">
                  
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> 25 High-Resolution Downloads per month</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Additional Downloads: ZAR 30 each</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Extended License Included</li>
                  
                </ul>

              </div> 
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Enterprise Plan</h5>
                  
                  <br><br>
                  <span class="h2">Custom Pricing</span>
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="Premium Package," name="title">
                    <input type="hidden" value="" name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="999" name="price">
                    <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Team + Access</button>
                  </form>
                  


                  <div class="my-2 text-danger">Everything in Professional Plan, PLUS</div>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Tailored for large enterprises</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Unlimited High-Resolution Downloads</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Exclusive Benefits, Custom Licensing</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Credits System</li>
                </ul>

              </div>
              
            </div>
          </div>

      </div>    
    </div>

@endsection
