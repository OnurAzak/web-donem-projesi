<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri değişkenlere atama
    $adSoyad = htmlspecialchars($_POST['adSoyad']);
    $email   = htmlspecialchars($_POST['email']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $konu    = htmlspecialchars($_POST['konu']);
    // Cinsiyet seçimine kontrol
    $cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : "Belirtilmedi";
    $mesaj   = htmlspecialchars($_POST['mesaj']);

    // Bootstrap tasarımıyla verileri ekrana verme
    ?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Gönderim Özeti - Onur Azak</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Form Gönderim Detayları</h3>
                </div>
                <div class="card-body">
                    <p><strong>Ad Soyad:</strong> <?php echo $adSoyad; ?></p>
                    <p><strong>E-posta:</strong> <?php echo $email; ?></p>
                    <p><strong>Telefon:</strong> <?php echo $telefon; ?></p>
                    <p><strong>Konu:</strong> <?php echo $konu; ?></p>
                    <p><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></p>
                    <p><strong>Mesaj:</strong> <?php echo $mesaj; ?></p>
                    
                    <hr>
                    <div class="alert alert-success">
                        Form verileri PHP sunucusuna başarıyla ulaştı ve işlendi![cite: 1]
                    </div>
                    <a href="iletisim.html" class="btn btn-secondary">İletişim Sayfasına Dön</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    // Eğer sayfaya doğrudan girilmeye çalışılırsa (POST edilmeden)
    header("Location: iletisim.html");
    exit();
}
?>