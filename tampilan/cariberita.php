<h1> Cari Judul Berita <b style="background:#FFFF00"><?php echo $_POST['judul']; ?></b></h1>
<table>
	<tr>
<?php
$kolom=3;
$i = 0;
include"pengaturan/koneksi.php";
$judul=$_POST['judul'];
$query=mysqli_query($koneksi,"select*from berita where judul like '%$judul%'");
while ($berita=mysqli_fetch_array($query)){
	if ($i>=$kolom) {
		echo "<tr></tr>";
		$i=0;
	}
	$i++;
	$jmlkomen=mysqli_num_rows(mysqli_query($koneksi,"select*from komentar where id_berita='$berita[id_berita]'"));
	echo "<td align='center'><br><a href='index.php?tampilan=detailberita&id_berita=$berita[id_berita]'><br>
	<img src='gambar/$berita[gambar]'width='280px'height='180px'>
	<h2>$berita[judul]</h2>
	</a><br></td>";
}

?>
	</tr>	
</table>