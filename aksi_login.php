<?php

$username= $_POST['username'];
$password= $_POST['password'];

// echo "Username : $username <br>";
// echo "Password : $password <br>";

include "koneksi.php";

$sql= "SELECT * FROM tbl_user WHERE
Username ='$username' and Password='$password' and Status='Aktif'";

$hasil=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($hasil);

// echo $sql;
// echo var_dump($data);

// echo "Username : ". $data['Username']." <br>";
// echo "Password : ". $data['Password']." <br>";

if (!empty($data)) {
    
session_start();
$_SESSION['Nama']= $data['Nama'];
$_SESSION['id']= $data['id'];

echo "Halo :". $_SESSION['Nama']. " Anda Berhasil Login";
header("Location: http://localhost/aufa_lkp/admin.php");
}else{
    echo "Login Gagal, Username atau password salah";
}