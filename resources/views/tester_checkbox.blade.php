@extends('layouts.app')

@section('content')

<main class="position-relative" style="top:3rem;">
      
      <section>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" id="search_field"  placeholder="Search" aria-label="Search">
            </form>
            <button type="button" class="btn btn-success my-2 my-sm-0" data-toggle="modal"
               data-target="#staticBackdrop">
                <i class="fas fa-shopping-cart total-count"></i>
            </button>
         </div>
         <div class="featured-area pt-100 pb-70">
            <div class="container">
               <div class="tab featured-tab-area">
                  <div class="row justify-content-center">

                     <div class="col-lg-4 col-md-8">
                        <ul class="tabs active">
                           <li class="">
                              <a href="#">
                                 All
                              </a>
                           </li>
                           <li class="">
                              <a href="#">
                                 Men
                              </a>
                           </li>
                           <li class="">
                              <a href="#">
                                 Women
                              </a>
                           </li>
                           <li class="">
                              <a href="#">
                                 Watch
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab_content current active pt-45">
                     
                     <div class="tabs_item current">
                        <div class="row justify-content-center">
                            


                            <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Oxford Shirts</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1200 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Oxford" data-price="1200" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                            </div>




                            <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Tunic </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Tunic" data-price="459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Huawei Watch Buds </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 4059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Huawei" data-price="4059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Short-Sleeve Shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 800 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Short-Sleeve" data-price="800" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Culotte dress</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 2459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Culotte" data-price="2459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Fire Boltt Dazzle </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1999 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="FireBoltt" data-price="1999" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Cuban Collar Shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 499 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="CubanCollar" data-price="499" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Babydoll</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1159 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Babydoll" data-price="1159" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Google Pixel</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 2059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Google" data-price="2059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">T-shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 700 </h4>
                                       <span>(3.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="T-shirt" data-price="700" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Wrap around</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 4059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Wrap" data-price="4059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">titan Power</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="titan" data-price="459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tabs_item">
                        <div class="row justify-content-center">
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Oxford Shirts</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1200 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Oxford" data-price="1200" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Short-Sleeve Shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 800 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Short-Sleeve" data-price="800" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Cuban Collar Shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 499 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Cuban" data-price="499" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/men-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">T-shirt</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 700 </h4>
                                       <span>(3.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="T-shirt" data-price="700" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tabs_item">
                        <div class="row justify-content-center">
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Tunic </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Tunic" data-price="459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Culotte dress</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 2459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Culotte" data-price="2459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Babydoll</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1159 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Babydoll" data-price="1159" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/women-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Wrap around</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 4059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Wrap" data-price="4059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tabs_item">
                        <div class="row justify-content-center">
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-1.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Huawei Watch Buds </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 4059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Huawei" data-price="4059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-2.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Fire Boltt Dazzle </a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 1999 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="FireBoltt" data-price="1999" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-3.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Google Pixel</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 2059 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Google" data-price="2059" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="https://add-to-cart-javascript.vercel.app/img/watch-4.jpg" alt="Images" style="max-width:100%;">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">titan Power</a></h3>
                                    <hr>
                                    <div class="content-in">
                                       <h4>₹ 459 </h4>
                                       <span>(4.4)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr>
                                    <div class="featured-content-list">
                                       <button type="button" data-name="titan" data-price="459" class="default-btn border-radius-5">Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <p id="not_found"></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Your Cart</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table class="show-cart table">
        
                  </table>
                  <div class="grand-total">Total price: R<span class="total-cart"></span></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-danger clear-all">Clear All</button> -->
                </div>
            </div>
         </div>
      </div>
   </main>

@endsection
