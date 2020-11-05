<?php
include"../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder lalu masuk folder pengaturan
include"../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$username=$_POST['username'];
$password=md5($_POST['password']); //encrypsi password
$tampil=mysqli_query($koneksi,"select*from anggota where username='$username' and password='$password' and aktif='1'");
//mencocokkan data yang diinput dgn data yg ada di tabel
$jumlahdata=mysqli_num_rows($tampil);
$anggota=mysqli_fetch_array($tampil);
if($jumlahdata>0) //apabila datanya diketemukan
{
	session_start(); //skrip memulai sesi
$_SESSION['id_anggota']=$anggota['id_anggota']; //memasukkan nilai seso dari nilai di tabel member
$_SESSION['username']=$anggota['username'];
$_SESSION['nama_lengkap']=$anggota['nama_lengkap'];
$_SESSION['email']=$anggota['email_anggota'];
$_SESSION['login']=1;
header('location:../');
}
else
{
	msgbox("Username atau Password Salah","../");
}

?>