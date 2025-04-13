<?php
include('conn.php');
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        exit(0);
}

$response = [
        'status' => ['success' => false, 'code' => 400],
        'data' => null
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if (empty($email) || empty($password)) {
                $response['status']['code'] = 400;
                $response['data'] = "Email dan kata sandi tidak boleh kosong.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $response['status']['code'] = 400;
                $response['data'] = "Format email tidak valid.";
        } else {
                $conn = connection();
                $sql = "SELECT * FROM users WHERE email = ?";
                $stmt = mysqli_prepare($conn, $sql);

                if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "s", $email);
                        mysqli_stmt_execute($stmt);
                        $query = mysqli_stmt_get_result($stmt);

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
                                        // session_start();
                                        // $_SESSION['user_id'] = $user['id'];
                                        // $_SESSION['user_role'] = $user['role'];

                                } else {
                                        $response['status']['code'] = 401;
                                        $response['data'] = "Email atau kata sandi tidak sesuai.";
                                }
                        } else {
                                $response['status']['code'] = 404;
                                $response['data'] = "Pengguna tidak ditemukan.";
                        }
                        mysqli_stmt_close($stmt);
                } else {
                        $response['status']['code'] = 500;
                        $response['data'] = "Terjadi kesalahan pada server.";
                }
                mysqli_close($conn);
        }
} else {
        $response['status']['code'] = 405;
        $response['data'] = "Metode request tidak valid.";
}
echo json_encode($response);
