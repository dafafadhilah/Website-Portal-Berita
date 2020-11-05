	<br><center>
<?php
include"pengaturan/koneksi.php";
$aktifiklan=mysqli_query($koneksi,"update iklan set aktif=1 where tgl_mulai >= curdate()"); //set iklan menjadi 1 jika tgl awalnya adalah tgl skr
$nonaktif_iklan=mysqli_query($koneksi,"update iklan set aktif=0 where tgl_akhir < curdate()"); //set iklan menjadi 0, yg tgl akhirnya lewat tgl skr
$query=mysqli_query($koneksi,"select*from iklan where aktif=1 and id_iklan=8"); //tampilkan iklan yg masih aktif yg tgl_awalnya dimulai dr skr
while($iklan=mysqli_fetch_array($query)){
	echo "<span class='iklan'>
	<a href='$iklan[link]'target='_BLANK'>
	<img src='gambar/$iklan[gambar]'width='700px'>
	<h3>$iklan[isi_iklan]</h3></a></span><br><hr>";
}

?>
</center>
</div>