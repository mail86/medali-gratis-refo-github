<?php
function sendNotification($token) {
    $url = 'https://fcm.googleapis.com/fcm/send';
    $fields = [
        'to' => $token,
        'notification' => [
            'title' => 'Kunjungan Baru!',
            'body' => 'Seseorang baru saja mengunjungi situs Anda.',
            'icon' => '/path/to/icon.png'
        ]
    ];
    $headers = [
        'Authorization: key=YOUR_SERVER_KEY',
        'Content-Type: application/json'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

// Contoh penggunaan
$deviceToken = 'DEVICE_TOKEN_YANG_DISIMPAN';
sendNotification($deviceToken);
?>
