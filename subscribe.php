<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    echo $email;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?subscribed=invalid");
        exit();
    }

    try {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->fetchColumn() > 0) {
            header("Location: index.php?subscribed=exists");
            exit();
        }

        // Insert new email
        $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->execute([$email]);

        header("Location: index.php?subscribed=success");
        exit();
    } catch (PDOException $e) {
        error_log("Subscription Error: " . $e->getMessage());
        header("Location: index.php?subscribed=error");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
