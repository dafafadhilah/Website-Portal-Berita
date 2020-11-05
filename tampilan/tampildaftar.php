<h1> MENDAFTAR </h1>
<pre>
<form action="perintah/daftar.php" method="post">
<div>Nama Lengkap 		: <input type="text" class="search" name="nama" size="20" placeholder="Masukan Nama Lengkap" required>
Username 		: <input type="text" class="search" name="nama" size="20" placeholder="Masukan Username" required>
Email 			: <input type="text" class="search" name="email" size="20" placeholder="Masukan Email" required>
Password 		: <input type="password" class="search" name="password" size="20" placeholder="Masukan Password" required>
Kode 			: <input type="text" class="search" name="kode" size="20" value="<?php echo random(); ?>" readonly required>
Masukan Kode Diatas 	: <input type="text" class="search" name="kode2" size="20" placeholder="Masukan Kode" required>

</div>
<button type="submit" class="button2">DAFTAR</button><br>
<hr>
</pre>
</form>