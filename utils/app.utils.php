<?php
// Constants
define('APP_NAME', 'AD Bookstore');
define('DEFAULT_BOOK_COVER', '../assets/img/book_cover_placeholder.jpg');

// Our "Database" of Books (using an array)
// Each book is an associative array
const BOOKS = [
    [
        'id' => 'b001',
        'title' => 'The PHP Handbook',
        'author' => 'Jane Doe',
        'description' => 'A comprehensive guide to PHP programming, covering all the basics and advanced topics.',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/150/FF5733/FFFFFF?text=PHP+Book', // Placeholder image
        'stock' => 15,
        'category' => 'Programming'
    ],
    [
        'id' => 'b002',
        'title' => 'Web Development with HTML & CSS',
        'author' => 'John Smith',
        'description' => 'Learn the fundamentals of web design with HTML5 and CSS3.',
        'price' => 24.50,
        'image' => 'https://via.placeholder.com/150/33FF57/FFFFFF?text=HTML+CSS',
        'stock' => 10,
        'category' => 'Web Design'
    ],
    [
        'id' => 'b003',
        'title' => 'Mastering JavaScript',
        'author' => 'Alice Wonderland',
        'description' => 'Dive deep into JavaScript, from ES6 to advanced frameworks.',
        'price' => 35.00,
        'image' => 'https://via.placeholder.com/150/3357FF/FFFFFF?text=JavaScript',
        'stock' => 7,
        'category' => 'Programming'
    ],
    [
        'id' => 'b004',
        'title' => 'Data Structures in PHP',
        'author' => 'Robert Johnson',
        'description' => 'Understand and implement common data structures using PHP.',
        'price' => 40.25,
        'image' => 'https://via.placeholder.com/150/FF33A1/FFFFFF?text=Data+Structures',
        'stock' => 3,
        'category' => 'Programming'
    ],
    [
        'id' => 'b005',
        'title' => 'Responsive Web Design',
        'author' => 'Emily White',
        'description' => 'Build websites that look great on any device.',
        'price' => 28.75,
        'image' => 'https://via.placeholder.com/150/A133FF/FFFFFF?text=Responsive+Design',
        'stock' => 20,
        'category' => 'Web Design'
    ],
];

function getAllBooks() {
    return BOOKS;
}

function getBookById($id) {
    foreach (BOOKS as $book) {
        if ($book['id'] === $id) {
            return $book;
        }
    }
    return null;
}

function applyRandomDiscount($price): float {
    // Generate a random discount percentage between 5% and 20%
    $discount_percentage = rand(5, 20);
    $discount_amount = $price * ($discount_percentage / 100);
    $new_price = $price - $discount_amount;
    return floor(min($new_price, $price - 0.01)); // Ensure price is floored and at least 0.01 less
}

function createSlug($text) {
    // Remove special characters, convert to lowercase, replace spaces with hyphens
    $text = preg_replace('/[^A-Za-z0-9-]+/', '-', $text);
    $text = strtolower($text);
    $text = trim($text, '-');
    return $text;
}

function daysUntilRelease($releaseDateString) {
    try {
        $releaseDate = new DateTime($releaseDateString);
        $now = new DateTime();
        if ($releaseDate < $now) {
            return 'Released!';
        }
        $interval = $now->diff($releaseDate);
        return $interval->days . ' days left';
    } catch (Exception $e) {
        return 'N/A';
    }
}

// Example of string manipulation from the list not used elsewhere, but for demonstration:
function demonstrateStringManipulation() {
    $text = "  Hello World from PHP!  ";
    echo "Original: '{$text}'<br>";
    echo "Lowercase: '" . strtolower($text) . "'<br>"; // strtolower
    echo "Uppercase: '" . strtoupper($text) . "'<br>"; // strtoupper
    echo "Trimmed: '" . trim($text) . "'<br>";         // trim
    echo "Left Trimmed: '" . ltrim($text) . "'<br>";     // ltrim
    echo "Right Trimmed: '" . rtrim($text) . "'<br>";    // rtrim
    echo "Substring (0, 5): '" . substr($text, 2, 5) . "'<br>"; // substr (adjusted start for trimmed text)

    $commaSeparated = "apple,banana,orange";
    $array = explode(",", $commaSeparated); // explode
    echo "Exploded to array: " . implode(" | ", $array) . "<br>"; // implode

    $arrayToRemove = ['a', 'b', 'c'];
    unset($arrayToRemove[1]); // unset
    echo "Unset array element: " . implode(" ", $arrayToRemove) . "<br>";
}
// demonstrateStringManipulation(); // Uncomment to see output for string functions