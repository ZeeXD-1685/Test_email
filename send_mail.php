<?php
// Ambil data dari formulir
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];
$sender = 'From: zeygadhiraahmad@gmail.com'; // Ganti dengan alamat email pengirim

// Header email
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= $sender . "\r\n";

// Kirim email
if(mail($email, $subjek, $pesan, $headers)) {
    echo 'Email berhasil dikirim.';
} else {
    echo 'Email gagal dikirim.';
}
?>
