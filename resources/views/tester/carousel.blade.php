<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Carousel with Multiple Images</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
        }
        .carousel-item {
            padding: 0 15%; /* Adjust padding to control spacing */
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .col {
            flex: 1;
            margin: 0 5px; /* Adjust margin for spacing between images */
        }
    </style>
</head>
<body style="background-color: #000;">

<div id="multiImageCarousel" class="carousel slide">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838000_1712832875_pexels-nappy-936043.jpg" alt="Image 1">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738837910_1710182319_car-8341712_1280.jpg" alt="Image 2">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838088_1710181111_WP_20150111_001.jpg" alt="Image 3">
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row">
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838088_1710181111_WP_20150111_001.jpg" alt="Image 4">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838000_1712832875_pexels-nappy-936043.jpg" alt="Image 5">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738837910_1710182319_car-8341712_1280.jpg" alt="Image 6">
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="row">
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738837910_1710182319_car-8341712_1280.jpg" alt="Image 7">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838088_1710181111_WP_20150111_001.jpg" alt="Image 8">
                </div>
                <div class="col">
                    <img src="https://imagery.test/storage/images/1738838000_1712832875_pexels-nappy-936043.jpg" alt="Image 9">
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>