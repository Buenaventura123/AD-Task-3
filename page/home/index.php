<?php
$pageTitle = 'Home';
$pageCss = '/AD-Bookstore/page/home/assets/css/home.css';
require_once __DIR__ . '/../../components/componentGroup/header.component.php';
require_once __DIR__ . '/../../utils/app.utils.php';

// Get all books using the utility function
$books = getAllBooks();
?>

<section class="book-list">
    <h2>Our Books</h2>
    <div class="books-grid">
        <?php foreach ($books as $book): ?>
            <?php
            // Pass the current book data to the template
            // Using extract() here for simplicity within the loop to make $book available directly
            extract(['book' => $book]);
            include __DIR__ . '/../../components/template/book_card.component.php';
            ?>
        <?php endforeach; ?>
    </div>
</section>

<?php
require_once __DIR__ . '/../../components/componentGroup/footer.component.php';
?>