<?php
$servername = "dpg-cvk2ghmuk2gs73a5gfv0-a";
$username = "database_sj5u_user"; // Agar hosting pe ho to change karo
$password = "EefL6ExPork5PRiqqhKjQ1Qiu4E0cYkq";// Agar hosting pe ho to change karo
$dbname = "database_sj5u";

// Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data Insert (For register.html)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $army_no = $_POST['army_no'];
    $rank_name = $_POST['rank_name'];
    $dob = $_POST['dob'];
    $mobile_no = $_POST['mobile_no'];
    $problem = $_POST['problem'];

    $sql = "INSERT INTO records (army_no, rank_name, dob, mobile_no, problem) 
            VALUES ('$army_no', '$rank_name', '$dob', '$mobile_no', '$problem')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee Registered Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch Data (For dashboard.html)
$sql = "SELECT * FROM records";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["army_no"]."</td><td>".$row["rank_name"]."</td><td>".$row["dob"]."</td><td>".$row["mobile_no"]."</td><td>".$row["problem"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='5'>No Records Found</td></tr>";
}

$conn->close();
?>

