<?php
// Redlock db credentials
$host = "db-redlock";
$user = "root";
$pass = "root";
$db = "redlock-web-2.0-db";

// establish connection ke database Redlock
$mysqli = new mysqli($host, $user, $pass, $db);

// tes connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// klo connection established, show data
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

// buat tampilin data
if ($result->num_rows > 0) {
    echo "<title>Redlock-web-2.0</title>";
    echo "<h1>Redlock-web-2.0</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Nama"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Jabatan"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Not found.";
}

// close mysql connection
$mysqli->close();
?>