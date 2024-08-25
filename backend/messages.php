<?php
$conn = mysqli_connect("localhost", "root", "", "wildwrld", "3304");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$subject = $_POST['subject'];
$email = $_POST['email'];
$messages = $_POST['messages'];

$subject = mysqli_real_escape_string($conn, $subject);
$email = mysqli_real_escape_string($conn, $email);
$messages = mysqli_real_escape_string($conn, $messages);

$sql = "INSERT INTO messages (subject, email, messages) VALUES ('$subject', '$email', '$messages')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Message sent successfully') </script>";
    header("Location: ../index.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
