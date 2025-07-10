<?php
$servername = "localhost";
$username = "keerthi";
$password = "keerthi";,$dbname
$dbname = "trng";
$conn = new mysqli($servername, $username,$password, $dbname);


if($conn->connect_error) {
	die("Connection failed:". $conn->connect_error);
}

$student = $_POST['student'];
$subject = $_POST['subject'];
$rating  = $_POST['rating'];
$comments = $_POST['comments'];

$sql="INSERT INTO feedback (student,subject,rating,comments) VALUES (?,?,?,?)";

$stmt = $conn->prepare(sql);
$stmt->bind_param("ssis" ,$student,$subject,Srating,$comments);


if($stmt->execute()) {
	echo "Feedback submitted successfully!";
} else {
	echo "Error:".$stmt->error;
}
$stmt->close();
$conn->close();
?>
