@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')

@section('content')

<div class="container-fluid position-relative" style="top:7rem">
    <div class="container">
      <div class="row">
        
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Basic</h5>
                  <small>Individual</small>
                  <br><br>
                  <span class="h2">R179</span>/month
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="" name="title">
                    <input type="hidden" value="" name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="179" name="price">
                    <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Unlimited Downloads</button>
                  </form>



                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Unlimited downloads & source files</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Access across Adobe, Figma, Canva & more</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Royalty-free Digital License</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> 10,000+ new assets added every day</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Standard</h5>
                  <small>Small Business</small>
                  <br><br>
                  <span class="h2">R499</span>/month 
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="" name="title">
                    <input type="hidden" value="" name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="499" name="price">
                    <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Team Access</button>
                  </form>


                  <div class="fw-bold">Everything in Individual, plus</div>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Includes 2 seats</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Team download history</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Team collections</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Team color palette</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Unified admin & billing</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Physical Unlimited License</li>
                </ul>

              </div> 
            </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h5 class="card-title">Premium</h5>
                  <small>Large Companies</small>
                  <br><br>
                  <span class="h2">R999</span>/month
                  <br><br>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="card-body text-center">
                  

                  <form action="{{url('/payment/')}}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"/>
                    <input type="hidden" value="Premiu," name="title">
                    <input type="hidden" value="" name="description">
                    <input type="hidden" value="subscription" name="type">
                    <input type="hidden" value="999" name="price">
                  <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Get Team + Access</button>
                  </form>
                  


                  <div class="fw-bold">Everything in Small Business, plus</div>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Includes 5 seats</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Dedicated support channel</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg> Training & onboarding</li>
                </ul>

              </div>
              
            </div>
          </div>
        </form>
      </div>    
    </div>

@endsection
