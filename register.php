<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];

    $query = "INSERT INTO employees (name, phone, department) VALUES ('$name', '$phone', '$department')";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "<script>alert('Employee Registered Successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . pg_last_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Register Employee</h2>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="department" placeholder="Department" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>

  
        

