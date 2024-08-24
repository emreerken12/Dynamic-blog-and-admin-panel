<?php

 include '../database.php';




if (isset($_POST['isim']) && isset($_POST['konu']) && isset($_POST['mail']) && isset($_POST['gsm']) && isset($_POST['mesaj']) && isset($_POST['kisisel_veri']) && isset($_POST['kisisel_veri2'])) {
   $isim = htmlspecialchars($_POST['isim']);
   $konu = htmlspecialchars($_POST['konu']);
   $mail = htmlspecialchars($_POST['mail']);
   $tel = htmlspecialchars($_POST['gsm']);
   $mesaj = htmlspecialchars($_POST['mesaj']);
   $k1 = htmlspecialchars($_POST['kisisel_veri']);
   $k2 = htmlspecialchars($_POST['kisisel_veri2']);

   echo "<h2>Gönderdiğiniz Bilgiler:</h2>";
   echo "<p>İsim: " . $isim . "</p>";
   echo "<p>Konu: " . $konu . "</p>";
   echo "<p>E-posta: " . $mail . "</p>";
   echo "<p>Telefon: " . $tel . "</p>";
   echo "<p>Mesaj: " . $mesaj . "</p>";
   echo "<p>Kişisel Veri 1: " . $k1 . "</p>";
   echo "<p>Kişisel Veri 2: " . $k2 . "</p>";

   header("location:/kurumsal26/iletisim.php");

} else {
   echo "Lütfen tüm alanları doldurun.";
}



?>