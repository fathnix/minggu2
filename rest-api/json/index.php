<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$method = $_SERVER['REQUEST_METHOD'];

$data_users = [
    ["id" => 1, "nama" => "Fatih", "Role" => "BackEnd"],
    ["id" => 2, "nama" => "Yogi", "Role" => "FrontEnd"]
];

// 4. Buat logika berdasarkan metode request
if ($method === 'GET') {
    // Jika GET, kembalikan data user dengan HTTP Status 200 (OK)
    http_response_code(200);
    echo json_encode([
        "status" => "success",
        "message" => "Data berhasil diambil",
        "data" => $data_users
    ]);
} else {
    // Jika selain GET, tolak dengan HTTP Status 405 (Method Not Allowed)
    http_response_code(405);
    echo json_encode([
        "status" => "error",
        "message" => "Metode $method tidak diizinkan. Gunakan method GET."
    ]);
}
?>