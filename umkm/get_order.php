<?php
include('../conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM orders WHERE user_id = '$id'";
    $query = mysqli_query(connection(), $sql);

    $result['status']['success'] = true;
    $result['status']['code'] = 200;
    $result['data'] = array();

    while ($row = mysqli_fetch_assoc($query)) {
        array_push($result['data'], $row);
    }

    echo json_encode($result);
}
?>
