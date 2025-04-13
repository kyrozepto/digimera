<?php
include('../conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $status = $_PUT['status'];
    $id = $_GET['id'];

    $sql = "UPDATE orders SET status='$status' WHERE id='$id'";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Status pesanan berhasil diperbarui.";
    $response['data'] = $_PUT;

    echo json_encode($response);
}
?>
