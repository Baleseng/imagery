
import './bootstrap';
import './checkbox';
import './cart';

function logEvent(eventType, pageUrl, error = null) {
    axios.post('/log-event', {
        event_type: eventType,
        page_url: pageUrl,
        error_reporting: error // Include error reporting
    })
    .then(response => {
        console.log('Event logged:', response.data.message);
    })
    .catch(error => {
        console.error('Error logging event:', error);
    });
}

// Log page view on page load
logEvent('page_view', window.location.href);

// Log button clicks
document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', function() {
        logEvent('button_click', window.location.href);
    });
});

// Log href clicks
document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function() {
        logEvent('href_click', this.href);
    });
});

// Example: Log an error
try {
    // Simulate an error
    throw new Error('Something went wrong!');
} catch (error) {
    logEvent('error', window.location.href, error.message);
}