<?php
$servername = "localhost";
$username = "keerthi";
$password = "keerthi";
$dbname = "trng";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];


$sql = "INSERT INTO registrations (name, email, event_name) VALUES ('$name', '$email', '$event')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration submitted successfully!'); window.location.href = 'events.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
