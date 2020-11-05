<?php
session_start();
include"../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"../pengaturan/waktu.php";
include"../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$kategori=$_POST['kategori'];

$id_admin=$_SESSION['id_admin'];
$aksi=$_GET['aksi'];
if($aksi=="tambah")
{
$simpan=mysqli_query($koneksi,"insert into kategori(kategori) values('$kategori')");
	if($simpan)
	msgbox("berhasil dibuat","../admin.php?tampilan=kelola_kategori"); //redirect ke index.php dg cara naik 1 folder
	else
	msgbox("Gagal terdafar","../admin.php?tampilan=kelola_kategori"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}
else if($aksi=="edit")
{
$id_kategori=$_POST['id_kategori'];
$simpan=mysqli_query($koneksi,"update kategori set kategori='$kategori' where id_kategori='$id_kategori'");
if($simpan)
		msgbox("berhasil dibuat","../admin.php?tampilan=kelola_kategori"); //redirect ke index.php dg cara naik 1 folder
		else
		msgbox("Gagal terdafar","../admin.php?tampilan=kelola_kategori"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}	
else if($aksi=="hapus")
{
	$id_kategori=$_GET['id_kategori'];
	$hapus=mysqli_query($koneksi,"delete from kategori where id_kategori='$id_kategori'");
	if($hapus)
		rdir("../admin.php?tampilan=kelola_kategori");
	else
		rdir("../admin.php?tampilan=kelola_kategori");
}
?>