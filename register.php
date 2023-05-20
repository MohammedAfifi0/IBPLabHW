<?php
// Validate the form data on the server-side
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Perform additional validation if required

// Connect to the MySQL database
$servername = "127.0.0.1"; // Replace with your database servername
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "registration_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the student's information into the "students" table
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
if ($conn->query($sql) === TRUE) {
    echo "<p>Registration successful!</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
