<?php
include 'config.php';
// Check if form submitted
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $email = trim($_POST['email']);

//     // Validate email
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         header("Location: index.php?subscribed=invalid"); // Adjust to your file (e.g., html.php)
//         exit;
//     }

//     // Simulate storage – replace with real database or file logic
//     $subscribersFile = 'subscribers.txt';
//     if (!file_exists($subscribersFile)) {
//         file_put_contents($subscribersFile, '');
//     }

//     $subscribers = file($subscribersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//     if (in_array($email, $subscribers)) {
//         header("Location: index.php?subscribed=exists");
//         exit;
//     }

//     // Save the new email
//     if (file_put_contents($subscribersFile, $email . PHP_EOL, FILE_APPEND)) {
//         header("Location: index.php?subscribed=success");
//     } else {
//         header("Location: index.php?subscribed=error");
//     }
//     exit;
// } else {
//     // If accessed directly, redirect back
//     header("Location: index.php");
//     exit;
// }



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: " . base_url('subscribed/invalid'));
        exit;
    }

    try {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            header("Location: " . base_url('subscribed/exists'));
        } else {
            // Insert the email
            $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
            $stmt->execute([$email]);
            header("Location: " . base_url('subscribed/success'));
        }
    } catch (Exception $e) {
        header("Location: " . base_url('subscribed/error'));
    }
    exit;
} else {
    header("Location: " . base_url());
    exit;
}
