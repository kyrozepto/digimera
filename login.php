<?php
include('conn.php');

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query(connection(), $sql);

    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            $response['status']['success'] = true;
            $response['status']['code'] = 200;
            $response['data'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
            ];
        } else {
            $response['status']['success'] = false;
            $response['status']['code'] = 401;
            $response['data'] = "Email atau kata sandi tidak sesuai.";
        }
    } else {
        $response['status']['success'] = false;
        $response['status']['code'] = 404;
        $response['data'] = "Pengguna tidak ditemukan.";
    }

    echo json_encode($response);
}
?>
