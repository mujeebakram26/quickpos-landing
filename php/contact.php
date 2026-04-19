<?php
// php/contact.php
// Handles the contact form POST submission

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// ---- 1. Collect & Sanitize Inputs ----
$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// ---- 2. Validate Empty Fields ----
$errors = [];

if (empty($name)) {
    $errors[] = 'Full Name is required.';
}

if (empty($email)) {
    $errors[] = 'Email Address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($message)) {
    $errors[] = 'Message cannot be empty.';
}

// ---- 3. If Errors, Redirect Back ----
if (!empty($errors)) {
    // Store errors in session (optional) or redirect with error flag
    session_start();
    $_SESSION['form_errors'] = $errors;
    header('Location: ../index.php#contact');
    exit;
}

// ---- 4. Simulate Success (no real email sending needed) ----
// In a real project you'd use: mail($email, 'Subject', $message)
// For this assignment, we simulate a successful submission.

$success = true; // simulated

// ---- 5. Redirect to Thank You Page ----
if ($success) {
    header('Location: ../thankyou.html');
    exit;
}
?>
