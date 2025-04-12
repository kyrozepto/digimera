<?php
include('./conn.php');
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $branding_package_id = $_POST['branding_package_id'];
    $business_description = $_POST['business_description'];

    $sql = "INSERT INTO orders (user_id, branding_package_id, business_description, status, created_at) 
            VALUES ('$user_id', '$branding_package_id', '$business_description', 'pending', NOW())";
    $query = mysqli_query(connection(), $sql);

    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['message'] = "Order created successfully!";
    $response['data'] = $_POST;

    echo json_encode($response);
}
?>
