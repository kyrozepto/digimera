<?php
include('conn.php');

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password, role) 
            VALUES ('$name', '$email', '$hashed_password', 'umkm')";

    $query = mysqli_query(connection(), $sql);

    if ($query) {
        $response['status']['success'] = true;
        $response['status']['code'] = 200;
        $response['data'] = [
            'name' => $name,
            'email' => $email
        ];
    } else {
        $response['status']['success'] = false;
        $response['status']['code'] = 500;
        $response['data'] = "Terjadi kesalahan saat registrasi.";
    }

    echo json_encode($response);
}
?>
