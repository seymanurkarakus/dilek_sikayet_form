<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilek ve Şikayet Formu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Dilek ve Şikayet Formu</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="isim">İsim:</label>
                <input type="text" id="isim" name="isim" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="konu">Konu:</label>
                <input type="text" id="konu" name="konu" required>
            </div>
            
            <div class="form-group">
                <label for="mesaj">Mesaj:</label>
                <textarea id="mesaj" name="mesaj" rows="4" required></textarea>
            </div>
            
            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>

<?php

// MySQL bağlantısı
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "dileksikayet"; 
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini işlemeye başlamadan önce kontrol yapılacak kısım
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini işle
    $isim = $_POST["isim"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    // Veritabanına ekle
    $sql = "INSERT INTO sikayet (isim, email, konu, mesaj) VALUES ('$isim', '$email', '$konu', '$mesaj')";
    if ($conn->query($sql) === TRUE) {
        // Veriler başarıyla eklendiğinde uyarı mesajı gösterilir
        echo "<script>alert('Görüş ve önerileriniz için teşekkürler.s');</script>";
    } else {
        $message = "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// MySQL bağlantısını kapat
$conn->close();

?>


