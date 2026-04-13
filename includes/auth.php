<?php
session_start();

// Të dhënat statike të përdoruesve (hardcoded)
$users = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'user1' => ['password' => 'user123', 'role' => 'user'],
    'user2' => ['password' => 'pass456', 'role' => 'user']
];

function authenticate($username, $password) {
    global $users;
    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        return true;
    }
    return false;
}

function isLoggedIn() {
    return isset($_SESSION['username']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

function requireAdmin() {
    requireLogin();
    if (!isAdmin()) {
        die("Access denied! You need admin privileges.");
    }
}

function getCurrentUser() {
    return $_SESSION['username'] ?? null;
}

function getCurrentRole() {
    return $_SESSION['role'] ?? null;
}
?>