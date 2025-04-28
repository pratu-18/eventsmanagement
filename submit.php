<?php
include 'connect.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your feedback has been received.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
