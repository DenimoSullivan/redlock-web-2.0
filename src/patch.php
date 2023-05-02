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

// buat tampilin data -> connection established
function totalUserCount ($mysqli) {
    $sql = "SELECT COUNT(ID) FROM users";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_row($result);
        return $row[0];
    } else {
        return 0;
    }
}

echo totalUserCount($mysqli);

// if ($result->num_rows > 0) {
    
//     echo "Total users: " . $row["total users"]
// } else {
//     echo "Not found.";
// }

// close mysql connection
$mysqli->close();
?>