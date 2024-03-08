<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data (e.g., store it in a database or send an email)
    // For demonstration purposes, we'll just display the data

    // Redirect to the confirmation page
    header("Location: confirmation.php");
    exit();
} else {
    // If accessed directly without submitting the form, redirect to the contact page
    header("Location: contact.html");
    exit();
}
?>
