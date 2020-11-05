<?php
include"../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$nama=$_POST['nama'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']); //enkrypsi password
$kode1=$_POST['kode'];
$kode2=$_POST['kode2'];
if($kode1==$kode2){ //jika kode yg diinput sama, maka
$simpan=mysqli_query($koneksi,"insert into anggota (nama_lengkap,username,email,password,aktif) values ('$nama','$username','$email','$password',1)");
if($simpan)
msgbox ("Berhasil Terdaftar","../"); //redirect ke index.php dg cara naik 1 folder
else
msgbox("Gagal Terdaftar","../index.php?tampilan=tampildaftar"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}
else
{
	msgbox("Kode Berbeda","../index.php?tampilan=tampildaftar"); //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
	
}
?>