<?php
session_start();
include 'database.php';

if (!isset($_SESSION["admin"])) {
    header("Location: admin.php");
    exit();
}

$query = "SELECT * FROM employees";
$result = pg_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Admin Dashboard</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Department</th>
        </tr>
        <?php while ($row = pg_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['department']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <button onclick="window.location.href='logout.php'">Logout</button>
</body>
</html>

