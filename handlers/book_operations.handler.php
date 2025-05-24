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
                    // Make sure we don't add more than available stock (simple check)
                    if ($_SESSION['cart'][$book_id] < $book['stock']) {
                        $_SESSION['cart'][$book_id]++;
                    } else {
                        // Optionally set a message for the user: "Cannot add more, out of stock"
                        $_SESSION['message'] = "Cannot add more of '" . htmlspecialchars($book['title']) . "'. Maximum stock reached.";
                    }
                } else {
                    $_SESSION['cart'][$book_id] = 1;
                }
            } else {
                // Optionally set a message for the user: "Book not found or out of stock"
                $_SESSION['message'] = "Book not available or out of stock.";
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
    }
}

// Redirect back to the previous page or a default page
if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Fallback if HTTP_REFERER is not set (e.g., direct access or some browser configurations)
    header('Location: /AD-Task-3/page/home/index.php');
}
exit; // Always exit after a header redirect