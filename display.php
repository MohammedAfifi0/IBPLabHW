<?php
// Connect to the MySQL database
$servername = "127.0.0.1"; // Replace with your database servername
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "registration_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the registered students' information from the "students" table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['full_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No students registered yet.</td></tr>";
}

$conn->close();
?>
