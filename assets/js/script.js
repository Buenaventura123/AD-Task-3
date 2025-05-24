document.addEventListener('DOMContentLoaded', function() {
    console.log('Bookstore application loaded!');

    // Example of a simple interactive element: a "Proceed to Checkout" button alert
    const checkoutButton = document.querySelector('.btn-checkout');
    if (checkoutButton) {
        checkoutButton.addEventListener('click', function() {
            alert('Proceeding to checkout! (This is a simulated checkout)');
            // In a real application, this would redirect to a checkout page
        });
    }
});