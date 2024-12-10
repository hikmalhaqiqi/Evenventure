<?php
// Konfigurasi database
$host = 'localhost'; 
$dbname = 'db_eventventure'; 
$username_db = 'root'; 
$password_db = '';

// Koneksi ke database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validasi sederhana
    if (!empty($username) && !empty($password)) {
        try {
            // Query untuk memasukkan data
            $query = "INSERT INTO eo (username, password) VALUES (:username, :password)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            header("Location: loginEO.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Username dan password tidak boleh kosong!";
    }
}
?>