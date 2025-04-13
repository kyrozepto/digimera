<?php
include('../conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $id = $_GET['id'];

    $sql = "DELETE FROM orders WHERE id='$id'";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Pesanan berhasil dihapus.";
    $response['deleted_id'] = $id;

    echo json_encode($response);
}
?>
