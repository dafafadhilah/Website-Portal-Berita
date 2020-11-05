
<h1>Berita Terbaru</h1><span class="small">
<?php echo hari_ina(date('l')) . ", " .tgl_ina($tgl_skrg) . " .:::. " . $jam_skrg; ?> </span><hr>
<center><br>
<?php
include"pengaturan/koneksi.php";
$querynews=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY tgl_posting DESC LIMIT 9"); //berita akan tampil 1 per satu dari yg terbaru
echo"<div class='jcarousel-wraper'>
<div class='jcarousel'>
<ul>"; //ini sebagai bingkai dari slider

while($berita=mysqli_fetch_array($querynews)){ //memulai perulangan
	$z=$berita['id_berita'];
echo "<li><div id='kekanan'>"; //ucword membuat huruf awal kata menjadi huruf besar

if(empty($berita['gambar'])) //kalo gambarnya tidak ada
{$gambar="nopic.jpg";} //maka, pakai gambar default
else
{$gambar=$berita['gambar'];}
echo "<div><a href='index.php?tampilan=detailberita&id_berita=$z'><img src='gambar/$gambar'width='280px'height='180px'></a></div>
<b><a href='index.php?tampilan=detailberita&id_berita=$z'>".ucwords($berita['judul'])."</a></b><br>";
echo "</li>";


echo selisihwaktu($berita['tgl_posting']);
} //tutup perulangan
echo "</ul></div>
"; //tutup bingkai 1

?>
</div><!--tutup bingkai 2-->
</div>
<center><a href="#" class="jcarousel-control-next">></a></center><a href="#" class="jcarousel-control-prev"><</a>