@extends('layouts.app')

@section('title',  '')

<style type="text/css">/* quick grid */
.container {
  width: 93%;
  margin: auto;
}

/* Bootstrap-style columns */
.column {
  position: relative;
  float: left;
  min-height: 1px;
  width: 25%;
  padding-left: 4px;
  padding-right: 4px;
  
  /* Space between tiles */
  margin-top: 8px;
}

.col-span {
  width: 50%;
}

.my-sizer-element {
  width: 8.33333%;
}

/* default styles so shuffle doesn't have to set them (it will if they're missing) */
.my-shuffle {
  position: relative;
  overflow: hidden;
}

/* Ensure images take up the same space when they load */
/* https://vestride.github.io/Shuffle/images */
.aspect {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  overflow: hidden;
}

.aspect__inner {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.aspect--16x9 {
  padding-bottom: 56.25%;
}

.aspect--9x80 {
  padding-bottom: calc(112.5% + 8px);
}

.aspect--32x9 {
  padding-bottom: calc(28.125% - 3px);
}

img {
  display: block;
  width: 100%;
  
  max-width: none;
  height: 100%;
  object-fit: cover;
}

/* Small reset */
*,
::before,
::after {
  box-sizing: border-box;
}

figure {
  margin: 0;
  padding: 0;
}
</style>

<script type="text/javascript">
   var Shuffle = window.Shuffle;

var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
  itemSelector: '.js-item',
  sizer: '.my-sizer-element',
  buffer: 1,
  delimeter: ','
});

const btnContainer = document.querySelector('.btn-group')
btnContainer.addEventListener('click', ev => {
  const type = ev.target.textContent;
  console.log('Type:', type);
 
  myShuffle.filter(type);
}, false)
</script>

<script type="text/javascript" src="https://unpkg.com/shufflejs@5"></script>
      
<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>


@section('content')
<div class="container">
  <div class="row" id="photo-gallery">
     <figure class="col-3 picture-item" data-groups='["animal"]'>
       <div class="aspect">
         <img src="https://www.imagery.test/storage/images/1722847981_josie-cross-dupe.jpeg" alt="A close, profile view of a crocodile looking directly into the camera" />
       </div>
       <figcaption>Crocodile</figcaption>
     </figure>
     <figure class="col-3 picture-item" data-groups='["city"]'>
       <div class="aspect">
         <img src="https://www.imagery.test/storage/images/1722847981_josie-cross-dupe.jpeg" alt="A multi-level highway stack interchange in Puxi, Shanghai" />
       </div>
       <figcaption>Crossroads</figcaption>
     </figure>
     <figure class="col-3 picture-item" data-groups='["nature","city"]'>
       <div class="aspect">
         <img
           src="https://www.imagery.test/storage/images/1722847981_josie-cross-dupe.jpeg"
           alt="Looking down on central park and the surrounding builds from the Rockefellar Center"
         />
         </div>
         <figcaption>Central Park</figcaption>
      </figure>
      <div class="col-1 js-shuffle-sizer"></div>
   </div>
</div>


@endsection
