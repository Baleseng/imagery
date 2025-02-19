<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilt Gyroscope</title>
    <style type="text/css">
        /* styles.css */
        body {
          font-family: Arial, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
          background-color: #f0f0f0;
        }

        .container {
          text-align: center;
        }

        .tilt-box {
          width: 200px;
          height: 200px;
          background-color: #ddd;
          border-radius: 10px;
          position: relative;
          overflow: hidden;
          margin: 20px auto;
        }

        .ball {
          width: 40px;
          height: 40px;
          background-color: #007bff;
          border-radius: 50%;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          transition: all 0.1s ease;
        }

        #orientation-data {
          font-size: 18px;
          margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Tilt Gyroscope</h1>
        <div class="tilt-box">
            <div class="ball" id="ball"></div>
        </div>
        <p id="orientation-data">Tilt Data: </p>
    </div>
   
    <script type="text/javascript">
        // script.js
        const ball = document.getElementById('ball');
        const orientationData = document.getElementById('orientation-data');

        // Check if the DeviceOrientation API is supported
        if (window.DeviceOrientationEvent) {
          window.addEventListener('deviceorientation', (event) => {
            // Get tilt data (beta: front-to-back, gamma: left-to-right)
            const beta = event.beta;  // Tilt front/back (in degrees, -180 to 180)
            const gamma = event.gamma; // Tilt left/right (in degrees, -90 to 90)

            // Update the ball position based on tilt
            const maxTilt = 45; // Maximum tilt angle for movement
            const ballX = (gamma / maxTilt) * 80; // Move horizontally
            const ballY = (beta / maxTilt) * 80;  // Move vertically

            // Constrain the ball within the box
            const xPos = Math.min(Math.max(ballX, -80), 80);
            const yPos = Math.min(Math.max(ballY, -80), 80);

            ball.style.transform = `translate(${xPos}px, ${yPos}px)`;

            // Display tilt data
            orientationData.textContent = `Tilt Data: Beta (Front/Back): ${beta.toFixed(2)}°, Gamma (Left/Right): ${gamma.toFixed(2)}°`;
          });
        } else {
          orientationData.textContent = 'DeviceOrientation API is not supported on this device.';
        }
    </script>

</body>
</html>