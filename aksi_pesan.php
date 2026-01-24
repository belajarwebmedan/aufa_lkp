<?php

$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];

echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Pesan : $pesan <br>";

$host="localhost";
$user="root";
$pass="";
$db="db_kampung_kecil";
$koneksi = mysqli_connect($host, $user, $pass,$db);

$sql="
INSERT INTO tbl_pesan (nama, email, pesan, status)
VALUES ('$nama','$email','$pesan','Belum Dibaca')
";

mysqli_query($koneksi,$sql);

$hasil = mysqli_affected_rows($koneksi);

if ($hasil>=1) {
    header("Location: http://localhost/aufa_lkp?pesan=berhasil#kontak");
}else{
    header("Location: http://localhost/aufa_lkp?pesan=gagal#kontak");
}