<?php
function connection() {
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'digimera';

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, $dbName);
    return $conn;
}
?>
