<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilt Gyroscope</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        .gyroscope {
            width: 300px;
            height: 600px;
            position: relative;
            overflow: hidden;
            background-color: #fff;
            margin: 0 auto 20px;
        }

        .ball {
            width: 300px;
            height: 6000px;
            background-image: url("{{ url('storage/images/robertson/tiltspice.png') }}");
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            transform: translate(-50%, -50%);
            transition: transform 0.1s ease-out;
        }

        .info {font-size: 12px; color: #000000; position: relative; bottom:1rem;}
        .info p {margin: 5px 0;}
    </style>
    
</head>

<body>
    
    <div class="container">
        
        <div class="gyroscope">
            <img src="{{ url('storage/images/robertson/background.jpg') }}">
            <div class="ball"></div>
        </div>

        <div class="info">
            <p>Alpha (Z-axis): <span id="alpha">0</span>°</p>
            <p>Beta (X-axis): <span id="beta">0</span>°</p>
            <p>Gamma (Y-axis): <span id="gamma">0</span>°</p>
        </div>

    </div>
   
    <script type="text/javascript">
        
        // Check if the DeviceOrientationEvent is supported
        if (window.DeviceOrientationEvent) {
            window.addEventListener("deviceorientation", handleOrientation);
        } else {
            alert("Sorry, your device doesn't support the DeviceOrientation API.");
        }

        function handleOrientation(event) {
            
            // Get the orientation values
            const alpha = event.alpha; // Z-axis rotation (0 to 360 degrees)
            const beta = event.beta;   // X-axis rotation (-180 to 180 degrees)
            const gamma = event.gamma; // Y-axis rotation (-90 to 90 degrees)

            // Update the displayed values
            document.getElementById("alpha").textContent = alpha ? alpha.toFixed(2) : "N/A";
            document.getElementById("beta").textContent = beta ? beta.toFixed(2) : "N/A";
            document.getElementById("gamma").textContent = gamma ? gamma.toFixed(2) : "N/A";

            // Move the ball based on tilt
            const ball = document.querySelector(".ball");
            const maxTilt = 90; // Maximum tilt in degrees
            const gyroscopeSize = 200; // Size of the gyroscope container
            const ballSize = 40; // Size of the ball

            // Calculate the ball's position based on gamma (Y-axis) and beta (X-axis)
            const ballMovementX = (gamma / maxTilt) * (gyroscopeSize / 2 - ballSize / 2);
            const ballMovementY = (beta / maxTilt) * (gyroscopeSize / 2 - ballSize / 2);

            // Apply the movement to the ball
            ball.style.transform = `translate(${ballMovementX}px, ${ballMovementY}px)`;
        }

    </script>

</body>
</html>