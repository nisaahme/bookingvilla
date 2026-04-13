<?php
require_once __DIR__ . '/auth.php';
?>
<nav>
    <a href="index.php">Home</a> |
    <a href="villas.php">Villas</a> |
    <?php if (isLoggedIn()): ?>
        <?php if (isAdmin()): ?>
            <a href="admin.php">Admin Dashboard</a> |
        <?php else: ?>
            <a href="dashboard.php">My Dashboard</a> |
        <?php endif; ?>
        <a href="logout.php">Logout (<?php echo htmlspecialchars(getCurrentUser()); ?>)</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</nav>
<hr>