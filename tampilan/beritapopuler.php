<br><br>
<h1>Berita Populer </h1>
<br>
<?php
include"pengaturan/koneksi.php";
$n=1;
$query=mysqli_query($koneksi,"Select*from berita order by dilihat desc limit 5");
while ($populer=mysqli_fetch_array($query)){
	$z=$populer['id_berita'];
	$jmlkomen=mysqli_num_rows(mysqli_query($koneksi,"select*from komentar where id_berita=$populer[id_berita]"));
	echo "<a href='index.php?tampilan=detailberita&id_berita=$z'>
	<h2>#$n $populer[judul]</h2>
	<p><span class='small'>Diposting Tanggal : ".tgl_ina2($populer['tgl_posting'])."<br> Dilihat : $populer[dilihat] kali. Komentar :$jmlkomen </span>
	</a></p>
	<hr>";
$n++;
}
?>