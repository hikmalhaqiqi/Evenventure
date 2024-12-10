<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'db_eventventure'); // Ganti dengan detail database Anda
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memeriksa apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $sql = "SELECT * FROM eo WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika user ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Mengambil data user

        // Cek apakah password cocok
        if ($password == $user['password']) { // Gunakan password_verify() jika password di-hash
                header("Location: HomePageEO.php");
                $_SESSION["role"] = "eo";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>


