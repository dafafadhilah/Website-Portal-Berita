<?php

include"pengaturan/koneksi.php";
if(empty($_SESSION['login'])){ //jika belum login maka

?>
<fieldset>
<legend><h2>Login</h2></legend>
<form action="perintah/login.php" method="post"><br>
<div><pre><h3>Username : <input type="text" class="search" name="username" size="30" placeholder="Masukan Username" required></h3></div>
<div><pre><h3>Password : <input type="password" class="search" name="password" size="30" placeholder="Masukan Password" required></h3></div>
<br>
<button type="submit" class="button2">Login</button><a href="index.php?tampilan=daftar"> Belum Daftar?</a>
<hr>
</form>
</fieldset>

<?php
} //tutup jika belum login
else { //selain itu, atau kecuali (jika sudah login), maka
$personal=mysqli_fetch_array(mysqli_query($koneksi,"select*from anggota where id_anggota='$id_anggota'"));
?>

<fieldset>
<legend><h1>Anda telah Login</h1></legend><br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><h2><?php echo $personal['nama_lengkap'];?></h2></td>
</tr>
<tr>
<td><br><a href="perintah/logout.php"><button class="button2">Logout</button></a></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
</fieldset>
<?php } //tutup jika sudah login ?>

