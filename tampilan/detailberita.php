<hr>
<?php
include"pengaturan/koneksi.php";
$id_berita=$_GET['id_berita'];
$querynews=mysqli_query($koneksi,"select*from berita where id_berita='$id_berita' ");
$update=mysqli_query($koneksi,"update berita set dilihat=dilihat+1 where id_berita='$id_berita' ");
//mengupdate status dilihat
$berita=mysqli_fetch_array($querynews);
echo "<span class='black'>".tgl_ina4($berita['tgl_posting'])."</span>";
echo "<h1 class='black'>".ucwords($berita['judul'])."</h1><br><center class='black'>"; //ucword membuat huruf awal kata menjadi huruf besar
if (empty($berita['gambar'])) //kalo gambarnya tidak ada,
{$gambar="nopic.jpg";} //maka, pakai gambar default
else
{ $gambar=$berita['gambar'];}
echo "<div><img src='gambar/$gambar' width='400px' heigh='220px'></div>
Foto By : $berita[foto_by]</center><br>
<p align='justify'>$berita[teks_berita]</p><hr>
<br>
";
echo "<h3 class='black'> <u>Komentar</u></h3>";
$querykomen=mysqli_query($koneksi,"select a.id_komentar, a.tgl_komentar,
a.isi_komentar,b.nama_lengkap,b.email from komentar a inner join anggota b on
a.id_anggota=b.id_anggota where a.id_berita='$id_berita' order by a.tgl_komentar desc"); //join tabel anggota dg tabel komentar
while($komen=mysqli_fetch_array($querykomen))
{
echo " <div class='black'> $komen[nama_lengkap] (".tgl_ina2($komen['tgl_komentar']).")</div>";
echo " <div class='black'> $komen[isi_komentar]</div><hr>";
}
if(!empty($_SESSION['login'])){
echo "<form action='perintah/komentar.php' method='post'> <input type='hidden' name='id_berita'
value='$id_berita'> <textarea class='search' name='komentar' placeholder='isi komentar'></textarea> <button
type='submit'>Kirim</button></form>";
}
?>