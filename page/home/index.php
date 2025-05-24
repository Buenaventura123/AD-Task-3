<?php
session_start(); // Start session for cart functionality

$pageTitle = 'Home';
// CORRECTED: Project name to AD-Task-3 and 'page' to 'pages'
$pageCss = '/AD-Task-3/page/home/assets/css/home.css'; 

// Path for header and footer now correctly includes 'componentGroup'
require_once __DIR__ . '/../../components/componentGroup/header.component.php'; 
// Path for app_utils.php (assuming it's still app_utils.php with underscore)
require_once __DIR__ . '/../../utils/app.utils.php'; 

// Get all books using the utility function
$books = getAllBooks();
?>

<section class="book-list">
    <h2>Our Books</h2>
    <div class="books-grid">
        <?php foreach ($books as $book): ?>
            <?php
            extract(['book' => $book]);
            // Path for book_card.template.php now correctly includes 'templates' (plural) and '.template.php'
            include __DIR__ . '/../../components/template/book_card.component.php'; 
            ?>
        <?php endforeach; ?>
    </div>
</section>

<?php
// Path for footer now correctly includes 'componentGroup'
require_once __DIR__ . '/../../components/componentGroup/footer.component.php'; 
?>