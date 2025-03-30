<?php
$hostname = "dpg-cvk2ghmuk2gs73a5gfv0-a";
$username = "database_sj5u_user"; // Agar hosting pe ho to change karo
$password = "EefL6ExPork5PRiqqhKjQ1Qiu4E0cYkq";// Agar hosting pe ho to change karo
$dbname = "database_sj5u";
$port = "5432";

// postgreSQL Connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

// Connection check
if (!$conn) {
    die("Database Connection Failed: " . pg_last_error());
}
?>
