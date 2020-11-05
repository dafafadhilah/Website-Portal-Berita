<?php
session_start();
include"../pengaturan/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include"../pengaturan/waktu.php";
include"../fungsi/fungsi.php"; //memanggil fungsi dg cara, naik 1 folder, lalu masuk folder fungsi
$aksi=$_GET['aksi'];
$id_anggota=$_GET['id_anggota'];
if($aksi=="blokir")
	{
		$blokir=mysqli_query($koneksi,"update anggota set aktif=0 where id_anggota='$id_anggota'");
		if($blokir)
			rdir("../admin.php?tampilan=kelola_anggota");
else
	rdir("../admin.php?tampilan=kelola_anggota");
}
else if($aksi=="aktifkan")
	{
		$blokir=mysqli_query($koneksi,"update anggota set aktif=1 where id_anggota='$id_anggota'");//nilai bit, tidak boleh pakai tanda petik
		if($blokir)
			rdir("../admin.php?tampilan=kelola_anggota");
		else
			rdir("../admin.php?tampilan=kelola_anggota");
	}
	?>