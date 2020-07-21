
<?php 
//koneksi ke data base

include 'config/koneksi.php';

//menangkap data yang dikirim dari form input


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

//menginput data ke database
$sql = "INSERT INTO data_anggota VALUES('$nama','$alamat','$pekerjaan')";
$simpan = mysqli_query($koneksi,$sql);

//mengalihkan halaman ke keterangan.php

header('location:index.php');
?>
