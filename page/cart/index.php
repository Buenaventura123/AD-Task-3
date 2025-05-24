<?php
session_start(); // Start the session to manage cart
$pageTitle = 'Shopping Cart';
$pageCss = '/AD-Task-3/page/cart/assets/css/cart.css';
require_once __DIR__ . '/../../components/componentGroup/header.component.php';
require_once __DIR__ . '/../../utils/app.utils.php';

$cart = $_SESSION['cart'] ?? [];
$total_price = 0;
?>

<section class="shopping-cart">
    <h2>Your Shopping Cart</h2>
    <?php if (empty($cart)): ?>
        <p>Your cart is empty. <a href="/AD-Task-3/page/home/index.php">Start shopping!</a></p>
    <?php else: ?>
        <div class="cart-items">
            <?php foreach ($cart as $book_id => $quantity):
                $book = getBookById($book_id);
                if ($book):
                    $item_price = $book['price'] * $quantity;
                    $total_price += $item_price;
            ?>
                    <div class="cart-item">
                        <img src="<?php echo htmlspecialchars($book['image'] ?? DEFAULT_BOOK_COVER); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                        <div class="item-details">
                            <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                            <p>Price: $<?php echo number_format($book['price'], 2); ?></p>
                            <p>Quantity: <?php echo $quantity; ?></p>
                            <p>Subtotal: $<?php echo number_format($item_price, 2); ?></p>
                        </div>
                        <form action="/AD-Task-3/handlers/book_operations.handler.php" method="post" class="remove-form">
                            <input type="hidden" name="action" value="remove_from_cart">
                            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book['id']); ?>">
                            <button type="submit" class="btn btn-remove">Remove</button>
                        </form>
                    </div>
            <?php
                endif;
            endforeach; ?>
        </div>
        <div class="cart-summary">
            <h3>Total: $<?php echo number_format($total_price, 2); ?></h3>
            <form action="/AD-Task-3/handlers/book_operations.handler.php" method="post">
                <input type="hidden" name="action" value="clear_cart">
                <button type="submit" class="btn btn-clear-cart">Clear Cart</button>
            </form>
            <button class="btn btn-checkout">Proceed to Checkout (Simulated)</button>
        </div>
    <?php endif; ?>
</section>

<?php
require_once __DIR__ . '/../../components/componentGroup/footer.component.php';
?>