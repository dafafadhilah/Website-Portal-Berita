<?php
error_reporting(0); //menonaktifkan warning dan notice
session_start();
$id_anggota=$_SESSION['id_anggota'];
include"../pengaturan/waktu.php"; //memanggil halaman waktu.php
include"../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$id_berita=$_POST['id_berita'];
$komentar=$_POST['komentar'];
echo "<font color=white>".$a=getClientIP()."";

$simpan=mysqli_query($koneksi,"insert into komentar (id_komentar,id_berita,id_anggota,tgl_komentar,isi_komentar,ip_address) values ('','$id_berita','$id_anggota','$skrg','$komentar','$a')");
if($simpan)
msgbox ("komentar berhasil","../index.php?tampilan=detailberita&id_berita=$id_berita"); //redirect ke index.php dg cara naik 1 folder
else
msgbox("Gagal komentar","../index.php?tampilan=detailberita&id_berita=$id_berita"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
	
?>