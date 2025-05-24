<?php

if (!isset($book)) {
    echo '<p>Book data not provided for template.</p>';
    return;
}

// Math operators: Using rand() for a 'special offer' visual.
$is_special_offer = rand(0, 1);
?>
<div class="book-card">
    <img src="<?php echo htmlspecialchars($book['image'] ?? DEFAULT_BOOK_COVER); ?>" alt="<?php echo htmlspecialchars($book['title']); ?> Cover">
    <h3><?php echo htmlspecialchars($book['title']); ?></h3>
    <p class="author">By: <?php echo htmlspecialchars($book['author']); ?></p>
    <p class="price">$<?php echo number_format($book['price'], 2); ?></p>
    <?php if ($is_special_offer && $book['stock'] > 0): ?>
        <p class="special-offer">Special Offer! (<?php echo rand(5, 15); ?>% off applied)</p>
    <?php endif; ?>
    <?php if ($book['stock'] > 0): ?>
        <a href="/AD-Bookstore/page/book_details/index.php?id=<?php echo htmlspecialchars($book['id']); ?>" class="btn">View Details</a>
    <?php else: ?>
        <p class="out-of-stock">Out of Stock</p>
    <?php endif; ?>
</div>