<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatives</title>

    <style type="text/css">
        .container{width:970px; height:600px; margin:5% auto; background-color:#cccccc;}
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.carousel {
    width: 970px;
    height: 600px;
    overflow: hidden;
    border: 2px solid #ccc;
    border-radius: 10px;
    position: relative;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    text-align: center;
    background-color: #fff;
}

.controls {
    display: flex;
    width: 100px;
    height:50px;
    justify-content: center;
    padding: 10px;
    background-color: #eee;
}

.controls label {
    margin: 0 5px;
    cursor: pointer;
}

.controls input[type="radio"] {
    display: none;
}

.controls input[type="radio"]:checked + label {
    font-weight: bold;
    color: #007bff;
}
    </style>
    
</head>

<body>
    
    <div class="container">
        <div class="carousel">
            <div class="slides">
                <div class="slide" id="slide1">Slide 1</div>
                <div class="slide" id="slide2">Slide 2</div>
                <div class="slide" id="slide3">Slide 3</div>

                <div class="controls">
                    <label for="radio1">Slide 1</label>
                    <input type="radio" name="carousel" id="radio1" checked>
                    <label for="radio2">Slide 2</label>
                    <input type="radio" name="carousel" id="radio2">
                    <label for="radio3">Slide 3</label>
                    <input type="radio" name="carousel" id="radio3">
                </div>
            </div>
            
        </div>    
    </div>

    <script type="text/javascript">
        const slides = document.querySelector('.slides');
const radios = document.querySelectorAll('.controls input[type="radio"]');

radios.forEach((radio, index) => {
    radio.addEventListener('change', () => {
        slides.style.transform = `translateX(-${index * 100}%)`;
    });
});
    </script>
    
</body>
</html>