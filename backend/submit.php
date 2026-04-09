<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, message) 
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Message sent successfully!');
            window.location.href='index.php';
          </script>";
} else {
    echo "Error: " . $conn->error;
}
?>