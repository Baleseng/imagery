@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative" style="top:5rem;">
  <div class="row">
    <div class="col-lg-8 border" style="max-width:80%;">
      <div class="mx-auto my-3 col-9 border" style="overflow:hidden; height: 500px;">
        <img src="{{ URL::asset('images/temp-img.jpg') }}" class="object-fit-fill" style="width:100%;">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="shadow-sm p-3 bg-white rounded">
        <h5>Shop image</h5>
        <form method="POST" action="{{ url('user')}}">
        {{ csrf_field() }}

           
              <ul class="list-group rounded-0">
                <li class="list-group-item my-0 border-0">
                  <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio1" autocomplete="on">
                  <label class="btn btn-outline-secondary col-12" for="btnRadio1">
                    <div class="text-start fs-5">Standards</div>
                    <span class="d-inline-block col-0"></span>
                    <span class="d-inline-block mx-1 col-9 text-start">Limited usage in print, advertising, and packaging. Unlimited web distribution</span>
                    <span class="d-inline-block align-top col-1 text-end">ZAR249</span>
                  </label>

                </li>
                <li class="list-group-item my-0 border-0">
                  <input type="radio" class="btn-check" name="btnGroupRadio" id="btnRadio2" autocomplete="off">
                  <label class="btn btn-outline-secondary col-12" for="btnRadio2">
                    <div class="text-start fs-5">Enhanced license</div>
                    <span class="d-inline-block col-0"></span>
                    <span class="d-inline-block mx-1 col-9 text-start">Unlimited usage in print, advertising, packaging, and merchandising. Unlimited web distribution.</span>
                    <span class="d-inline-block align-top col-1 text-end">ZAR349</span>
                  </label>
                </li>
              </ul>

              <div class="d-grid gap-2 my-3">
                <button class="btn btn-primary" type="button">Make purchase</button>
                <a href="{{ url('/pricing') }}" class="btn btn-light btn-outline-secondary" type="button">View plans and prices</a>
              </div>
                         

        </form>
      </div>
    </div>
  </div>
</div>

@endsection
