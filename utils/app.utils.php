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

