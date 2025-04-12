<?php
include('./conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO branding_packages (name, description, price) VALUES ('$name', '$description', '$price')";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Package added!";
    $response['data'] = $_POST;

    echo json_encode($response);
}
?>
update_branding_package.php