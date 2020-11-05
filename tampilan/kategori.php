<h1>Berita <?php echo ucwords($_GET['kategori']) ?> </h1><br>
<table>
	<tr>
<?php

include"pengaturan/koneksi.php";

$kolom=3;
$i = 0;
$id_kategori=$_GET['id_kategori'];
$query=mysqli_query($koneksi,"select * from berita where id_kategori='$id_kategori'");
while($populer=mysqli_fetch_array($query)){
	if ($i>=$kolom) {
		echo "<tr></tr>";
		$i=0;
	}
	$i++;
echo "<td align='center'><br>
<img src='gambar/$populer[gambar]' width='270' height='170'>
<a href='index.php?tampilan=detailberita&id_berita=$populer[id_berita]'>
<h2>$populer[judul]</h2>
</a></td>";
}
?>
	</tr>	
</table>