<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilt Gyroscope</title>





<script>
    document.getElementById('track-click').addEventListener('click', function() {
        const trackId = this.getAttribute('data-track-id');

        // Send an AJAX request to track the click
        fetch(`/track/${tracktId}/click`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        });
    });
</script>

</head>

<body>

    <button id="track-click" data-post-id="{{ $track->id }}">Click Me</button>

</body>
</html>