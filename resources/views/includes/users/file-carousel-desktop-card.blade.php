<!-- Indicators -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#CarouselDesktop" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#CarouselDesktop" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#CarouselDesktop" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
        @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1738838000_1712832875_pexels-nappy-936043.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
         @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1726491153_1726045227_1712824748_pexels-ika-and-lukas-748870.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
         @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1738831276_1712829627_pexels-simon-berger-1266810.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
        </div>
    </div>
    <div class="carousel-item">
        <div class="row">
        @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1727679369_1725976262_1712134990_WP_20150202_008.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
         @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1726490884_1712832811_pexels-jasmine-carter-812258.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
         @include('includes.users.file-cards-popular-1')
        <img src="https://imagery.test/storage/images/1738838088_1710181111_WP_20150111_001.jpg" class="col-12 images"/>
        @include('includes.users.file-cards-popular-2')
        </div>
    </div>
</div>
<!-- Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#CarouselDesktop" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#CarouselDesktop" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>