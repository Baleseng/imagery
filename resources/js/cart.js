document.addEventListener('DOMContentLoaded', function () {
    const addToCartForms = document.querySelectorAll('.add-to-cart-form');
    const removeForms = document.querySelectorAll('.remove-from-cart-form');

    addToCartForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    quantity: form.querySelector('input[name="file_quantity"]').value
                })
            })
            .then(response => response.json())
            .then(data => {
                // Update the cart count
                document.querySelector('.cart-count').textContent = data.cartCount;
            })
            .catch(error => console.error('Error:', error));
        });
    });

    removeForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            fetch(form.action, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove the item row from the table
                    form.closest('#removeCart').remove();

                    // Update the total price
                    document.querySelector('.total-price').textContent = `Total Price: $${data.totalPrice.toFixed(2)}`;

                    // Update the cart count in the header
                    document.querySelector('.cart-count').textContent = data.cartCount;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});