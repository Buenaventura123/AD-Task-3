</main>
    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo APP_NAME; ?>. All rights reserved.</p>
        </div>
    </footer>
    <script src="/AD-Task-3/assets/js/script.js"></script>
    <?php if (isset($pageJs)): ?>
        <script src="<?php echo $pageJs; ?>"></script>
    <?php endif; ?>
</body>
</html>