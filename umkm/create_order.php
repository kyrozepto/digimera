<?php
include('../conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $package_id = $_POST['package_id'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO orders (user_id, package_id, notes, created_at) 
            VALUES ('$user_id', '$package_id', '$notes', NOW())";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Pesanan berhasil dibuat.";
    $response['data'] = $_POST;

    echo json_encode($response);
}
?>
