<?php
include('./conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $name = $_PUT['name'];
    $description = $_PUT['description'];
    $price = $_PUT['price'];
    $id = $_GET['id'];

    $sql = "UPDATE branding_packages SET name='$name', description='$description', price='$price' WHERE id='$id'";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Package updated!";
    $response['data'] = $_PUT;

    echo json_encode($response);
}
?>
