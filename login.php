<?php
require_once 'includes/auth.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (authenticate($username, $password)) {
        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}

require_once 'includes/header.php';
?>

<h2>Login</h2>

<?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post" action="">
    <div>
        <label>Username:</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>

<p>Demo credentials:</p>
<ul>
    <li>Admin: admin / admin123</li>
    <li>User: user1 / user123</li>
</ul>

<?php require_once 'includes/footer.php'; ?>

