<table>
	<tr>
<?php
$kolom=3;
$i = 0;
include"pengaturan/koneksi.php";
$query=mysqli_query($koneksi,"Select*from berita order by dilihat desc limit 9");
while ($populer=mysqli_fetch_array($query)){
	if ($i>=$kolom) {
		echo "<tr></tr>";
		$i=0;
	}
	$i++;
	$z=$populer['id_berita'];	
	echo "<td align='center'><br>
	<a href='index.php?tampilan=detailberita&id_berita=$z'>
	<img src='gambar/$populer[gambar]' width='280px' height='180px'>
	<h2>$populer[judul]</h2>
	</a></td>";
}
?>
	</tr>	
</table>