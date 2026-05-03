<?php
// Formdan veri POST metodu ile gelmiş mi diye kontrol ediyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Gelen verileri boşluklardan temizleyerek alıyoruz
    $email = trim($_POST['email']);
    $sifre = trim($_POST['sifre']);

    // PHP Tarafında Boşluk Kontrolü (Güvenlik için ek önlem)
    if (empty($email) || empty($sifre)) {
        // Hata varsa geldiği sayfaya geri fırlat
        header("Location: login.html");
        exit();
    }

    // KURAL KONTROLÜ: Girilen email, (şifre + @sakarya.edu.tr) formatında olmalı.
    // Örn: Şifre 'b123' ise email 'b123@sakarya.edu.tr' olmalı.
    $beklenen_email = $sifre . "@sakarya.edu.tr";

    if ($email === $beklenen_email) {
        // Başarılı giriş mesajı
        echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>";
        echo "<h1 style='color: green;'>Hoşgeldiniz " . htmlspecialchars($sifre) . "</h1>";
        echo "</div>";
    } else {
        // Bilgiler hatalıysa tekrar login sayfasına yönlendir
        header("Location: login.html");
        exit();
    }

} else {
    // Sayfaya direkt linkten girmeye çalışanları geri gönder
    header("Location: login.html");
    exit();
}
?>