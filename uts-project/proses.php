<?php

date_default_timezone_set('Asia/Jakarta'); 

$filePenyimpanan = 'riwayat_pesan.json';

// Fungsi untuk membaca semua pesan dari file
function getMessages($file) {
    if (!file_exists($file)) {
        return [];
    }
    $data = file_get_contents($file);
    $messages = json_decode($data, true);
    // Jika file kosong atau formatnya salah, kembalikan array kosong
    return $messages === null ? [] : $messages;
}

// Inisialisasi variabel
$nama = $email = $pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Baca data yang sudah ada
    $messages = getMessages($filePenyimpanan);

    // Buat array untuk pesan baru
    $newMessage = [
        'nama' => $nama,
        'email' => $email,
        'pesan' => $pesan,
        'waktu' => date('d M Y, H:i')
    ];
    
    array_push($messages, $newMessage);

    file_put_contents($filePenyimpanan, json_encode($messages, JSON_PRETTY_PRINT));

} else {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pengiriman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center;">
        
        <h1>Pesan Berhasil Terkirim!</h1>
        
        <div class="result-card" style="opacity:0; text-align: left;">
            <p>Terima kasih, kami telah menerima pesan Anda.</p>
            <hr style="margin: 20px 0;">
            <p><strong>Data yang Anda Kirim:</strong></p>
            <p>
                <strong>Nama:</strong> <?php echo $nama; ?><br>
                <strong>Email:</strong> <?php echo $email; ?><br>
                <strong>Pesan:</strong> <?php echo nl2br($pesan); ?>
            </p>
        </div>

        <a href="index.html" style="margin-bottom: 30px; display: inline-block;">Kirim Pesan Lain</a>
        <hr>
        <h2>Riwayat Pesan</h2>
        
        <div class="history-container">
            <?php 
                // Baca semua pesan untuk ditampilkan
                $semuaPesan = getMessages($filePenyimpanan);
                if (!empty($semuaPesan)): 
            ?>
                <?php foreach (array_reverse($semuaPesan) as $msg): ?>
                    <div class="result-card" style="text-align: left; background-color: #f8f9fa; border-left-color: #6c757d;">
                        <p style="font-size: 14px; color: #6c757d;">
                            <em>Dikirim pada: <?php echo $msg['waktu']; ?></em>
                        </p>
                        <p>
                            <strong>Nama:</strong> <?php echo htmlspecialchars($msg['nama']); ?><br>
                            <strong>Email:</strong> <?php echo htmlspecialchars($msg['email']); ?><br>
                            <strong>Pesan:</strong> <?php echo nl2br(htmlspecialchars($msg['pesan'])); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.result-card').first().animate({'opacity': '1'}, 800);
        });
    </script>
</body>
</html>