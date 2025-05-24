<?php
require_once __DIR__ . '/../../utils/app.utils.php';

$book_id = $_GET['id'] ?? null;
$book = null;

if ($book_id) {
    $book = getBookById($book_id); // Using array manipulation function
}

if (!$book) {
    // Book not found, redirect or show an error
    header('Location: /AD-Task-3/page/home/index.php');
    exit;
}

$pageTitle = htmlspecialchars($book['title']);
$pageCss = '/AD-Task-3/page/book_details/assets/css/book_details.css';
require_once __DIR__ . '/../../components/componentGroup/header.component.php';
?>

<section class="book-detail">
    <div class="book-image">
        <img src="<?php echo htmlspecialchars(string: $book['image'] ?? DEFAULT_BOOK_COVER); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
    </div>
    <div class="book-info">
        <h2><?php echo htmlspecialchars($book['title']); ?></h2>
        <p class="author">By: <?php echo htmlspecialchars($book['author']); ?></p>
        <p class="category">Category: <?php echo htmlspecialchars($book['category']); ?></p>
        <p class="description"><?php echo htmlspecialchars($book['description']); ?></p>
        <p class="price">$<?php echo number_format($book['price'], 2); ?></p>
        <p class="stock">Stock: <?php echo $book['stock'] > 0 ? $book['stock'] : 'Out of Stock'; ?></p>

        <?php
        // Demonstrate date manipulation (concept from list)
        // Let's assume a release date for demonstration purposes
        $fakeReleaseDate = (new DateTime())->modify('+'. rand(10, 60) .' days')->format('Y-m-d');
        if (rand(0,1) == 1) { // Randomly show a release date
            echo '<p class="release-info">Release: ' . daysUntilRelease($fakeReleaseDate) . '</p>';
        }
        ?>

        <?php if ($book['stock'] > 0): ?>
            <form action="/AD-Task-3/handlers/book_operations.handler.php" method="post">
                <input type="hidden" name="action" value="add_to_cart">
                <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book['id']); ?>">
                <button type="submit" class="btn btn-add-to-cart">Add to Cart</button>
            </form>
        <?php endif; ?>
    </div>
</section>

<?php
require_once __DIR__ . '/../../components/componentGroup/footer.component.php';
?>