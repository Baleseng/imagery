@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')

<div class="mt-5 border bg-black bg-gradient container-fluid">
  
</div>

@section('content')

<div class="container-fluid position-relative">
  
  <div class="row">
    
    @include('includes.users.file-payment-'.$id->file_type)

    <div class="col-md-7 order-md-1 py-3 border border-1">
      
      <span class="py-1 col-2"><h4 class="text-muted roboto-bold">Payment</h4></span>

      <nav class="d-flex flex-row nav nav-pills nav-outline-primary" id="pills-tab" role="tablist">  
        <a class="col-6 rounded-0 nav-link active fs-5" id="pills-credit-tab" data-bs-toggle="pill" href="#pills-credit" role="tab" aria-controls="pills-credit" tabindex="-1" aria-credit="true">Credit card</a>
        <a class="col-6 rounded-0 nav-link fs-5" id="pills-paypal-tab" data-bs-toggle="pill" href="#pills-paypal" role="tab" aria-controls="pills-paypal" aria-selected="false">Paypal</a>
      </nav>

      <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-credit" role="tabpanel" aria-labelledby="pills-credit-tab">
    
      <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
        @csrf
        
        <div class="form-floating mb-3">
          <input type="text" name="cardholdername" class="form-control border-bottom border-0 rounded-0" id="cc-name" placeholder="Name on card" required="">
          <label for="cc-name">Name on card</label>
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">Name on card is required</div>
        </div>
      
        <div class="form-floating mb-3 position-relative">
          <input type="text" name="cardholdernumber" class="form-control border-bottom border-0 rounded-0" id="cc-number" placeholder="Credit card number"required="">
          <label for="cc-number">Credit card number</label>
          <div class="position-absolute top-50 end-0 fs-5 text-black-50 mx-1">
              <i class="fa-brands fa-cc-visa"></i>
              <i class="fa-brands fa-cc-mastercard"></i>
              <i class="fa-brands fa-cc-discover"></i>
              <i class="fa-brands fa-cc-diners-club"></i>
              <i class="fa-brands fa-cc-apple-pay"></i>
              <i class="fa-brands fa-cc-amex"></i>
              <i class="fa-brands fa-cc-amazon-pay"></i>
            </div>
          <div class="invalid-feedback">Credit card number is required</div>
        </div>
        
        <div class="row">
          <div class="form-floating col-md-6 mb-3">
            <input type="text" name="cardholderexpire" class="form-control border-bottom border-0 rounded-0" id="cc-expiration" placeholder="Expiration" required="">
            <label for="cc-expiration">Expiration</label>

            

            <div class="invalid-feedback">Expiration date required</div>
          </div>

          <div class="form-floating col-md-6 mb-3 position-relative">
            <input type="text" name="cardholdercvv" class="form-control border-bottom border-0 rounded-0" id="cc-cvv" placeholder="cvv" required="">
            <label for="cc-cvv">cvv</label>
            <div class="position-absolute top-50 end-0 fs-5 text-black-50 mx-3">
              <i class="fa-solid fa-credit-card"></i>
            </div>
            <div class="invalid-feedback">Security code required</div>
          </div>
        </div>
        
        <h4 class="mb-3 text-muted roboto-bold">Billing address</h4>

        <div class="form-floating mb-3">
          <input type="text" name="cardholderaddress" class="form-control border-bottom border-0 rounded-0" id="address" placeholder="Address" required="">
          <label for="address">Address</label>
          <div class="invalid-feedback">Please enter your shipping address.</div>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="cardholderaddressopt" class="form-control border-bottom border-0 rounded-0" id="address2" placeholder="Apartment or suite">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
        </div>

        <div class="row">
          <div class="form-floating col-md-5 mb-3">
            <select name="cardholdercountry" class="form-select border-bottom border-0 rounded-0" id="floatingSelect" aria-label="Country" required="">
                <option value="">Select Country</option>
                <option value="al">Algeria</option>
                <option value="ao">Angola</option>
                <option value="bi">Benin</option>
                <option value="bw">Botswana</option>
                <option value="bf">Burkina Faso</option>
                <option value="bu">Burundi</option>
                <option value="cv">Cape Verde</option>
                <option value="cf">Central African Republic</option>
                <option value="ch">Chad</option>
                <option value="co">Comoros</option>
                <option value="cm">Cote d’Ivoire</option>
                <option value="drc">Democratic Republic of the Congo</option>
                <option value="dj">Djibouti</option>
                <option value="eg">Egypt</option>
                <option value="eq">Equatorial Guinea</option>
                <option value="er">Eritrea</option>
                <option value="sz">Eswatini</option>
                <option value="et">Ethiopia</option>
                <option value="ga">Gabon</option>
                <option value="gm">Gambia</option>
                <option value="gh">Ghana</option>
                <option value="gn">Guinea</option>
                <option value="gb">Guinea-Bissau</option>
                <option value="ke">Kenya</option>
                <option value="ls">Lesotho</option>
                <option value="lr">Liberia</option>
                <option value="ly">Libya</option>
                <option value="mg">Madagascar</option>
                <option value="mw">Malawi</option>
                <option value="ml">Mali</option>
                <option value="mr">Mauritania</option>
                <option value="mu">Mauritius</option>
                <option value="ma">Morocco</option>
                <option value="mz">Mozambique</option>
                <option value="na">Namibia</option>
                <option value="ne">Niger</option>
                <option value="ng">Nigeria</option>
                <option value="rw">Rwanda</option>
                <option value="st">Sao Tome and Principe</option>
                <option value="sn">Senegal</option>
                <option value="sc">Seychelles</option>
                <option value="sl">Sierra Leone</option>
                <option value="so">Somalia</option>
                <option value="za">South Africa</option>
                <option value="ss">South Sudan</option>
                <option value="sd">Sudan</option>
                <option value="tz">Tanzania</option>
                <option value="tg">Togo</option>
                <option value="tn">Tunisia</option>
                <option value="ug">Uganda</option>
                <option value="zm">Zambia</option>
                <option value="zw">Zimbabwe</option>   
            </select>
            <label for="floatingSelect">Country</label>
            <div class="invalid-feedback">Please provide a valid country.</div>
          </div>

          <div class="form-floating col-md-5 mb-3">
            <input type="text" name="cardholderprovince" class="form-control border-bottom border-0 rounded-0" id="province" placeholder="State/Province" required="">
            <label for="province">State/Province</label>
            <div class="invalid-feedback">Please provide a valid state.</div>
          </div>

          <div class="form-floating col-md-2 mb-3">
            <input type="text" name="cardholderzip" class="form-control border-bottom border-0 rounded-0" id="zip" placeholder="Zip" required="">
            <label for="zip">Zip</label>
            <div class="invalid-feedback">Zip code required.</div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        <!--<a href="https://imagery.test/download/.$id->id" class="btn btn-primary btn-lg btn-block">Continue to checkout</a>-->
        </form>
      </div>
      <div class="tab-pane fade" id="pills-paypal" role="tabpanel" aria-labelledby="pills-paypal-tab">paypal</div>
      </div>

      </div>
    </div>

</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';

    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');

      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
  
    
@endsection
