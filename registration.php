<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST" action="register.php">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>

        <input type="submit" value="Submit">
    </form>
    <br>
    <h2>Registered Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php include('display.php'); ?>
    </table>
</body>
</html>
