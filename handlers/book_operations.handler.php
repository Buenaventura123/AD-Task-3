<?php
session_start();
require_once __DIR__ . '/../utils/app.utils.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $book_id = $_POST['book_id'] ?? '';

    switch ($action) {
        case 'add_to_cart':
            $book = getBookById($book_id);
            if ($book && $book['stock'] > 0) {
                // Check if book already in cart, increment quantity
                if (isset($_SESSION['cart'][$book_id])) {
                    $_SESSION['cart'][$book_id]++;
                } else {
                    $_SESSION['cart'][$book_id] = 1;
                }
                // Simulate stock reduction (for this session only)
                // In a real app, this would update the database.
                // For this example, we won't modify the global BOOKS constant directly.
            }
            break;

        case 'remove_from_cart':
            if (isset($_SESSION['cart'][$book_id])) {
                // Using unset() from the list
                unset($_SESSION['cart'][$book_id]);
            }
            break;

        case 'clear_cart':
            // Using unset() for the entire cart array
            unset($_SESSION['cart']);
            break;

        // Add more handlers as needed, e.g., 'checkout'
    }
}

// Redirect back to the previous page or a default page
if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: /AD-Bookstore/page/home/index.php');
}
exit;