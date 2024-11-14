<?php
// Nama file log
$logFile = "visitor_log.txt";

// Dapatkan informasi pengunjung
$ipAddress = $_SERVER['REMOTE_ADDR']; // Alamat IP
$pageVisited = $_SERVER['REQUEST_URI']; // Halaman yang dikunjungi
$userAgent = $_SERVER['HTTP_USER_AGENT']; // Agen pengguna (browser)
$visitTime = date("Y-m-d H:i:s"); // Waktu kunjungan

// Format data untuk ditulis ke file log
$logData = "IP: $ipAddress - Page: $pageVisited - Time: $visitTime - User Agent: $userAgent" . PHP_EOL;

// Tulis data ke file log
file_put_contents($logFile, $logData, FILE_APPEND | LOCK_EX);

// Hanya untuk memastikan script bekerja, Anda bisa menghapus atau mengubah ini
echo "Data berhasil dicatat.";
?>
