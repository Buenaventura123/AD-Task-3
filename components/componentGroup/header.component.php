<?php
// Include necessary utilities
require_once __DIR__ . '/../../utils/app.utils.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?> - <?php echo $pageTitle ?? 'Welcome'; ?></title>
    <link rel="stylesheet" href="/AD-Task-3/assets/css/style.css">
    <?php if (isset($pageCss)): ?>
        <link rel="stylesheet" href="<?php echo $pageCss; ?>">
    <?php endif; ?>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1><a href="/AD-Task-3/page/home/index.php"><?php echo APP_NAME; ?></a></h1>
            <nav>
                <ul>
                    <li><a href="/AD-Task-3/page/home/index.php">Home</a></li>
                    <li><a href="/AD-Task-3/page/cart/index.php">Cart</a></li>
                    </ul>
            </nav>
        </div>
    </header>
    <main class="container"></main>