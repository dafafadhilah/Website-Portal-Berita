<?php
	include"pengaturan/koneksi.php";
?>

<h2> Tambah Berita</h2>
<form action="perintah/kelola_berita.php?aksi=tambah" method="post" enctype="multipart/form-data" name="form1">
	<table width="100%" border="1" cellspacing="0" cellpadding="0">  
		<tr>    
			<td>Judul</td>    
			<td><input type="text" name="judul" placeholder="Masukan Judul" size="100" required></td>  
		</tr>  
		<tr>    
			<td>Kategori Berita</td>    
			<td> <select name="kategori"> <option value="">-Pilih</option>
				<?php $query=mysqli_query($koneksi,"select*from kategori");
				while($kategori=mysqli_fetch_array($query))
					{
						echo "<option value='$kategori[id_kategori]'>$kategori[kategori]</option>";
					}?>
				</select>
			</td>  
		</tr>  
				<tr>    
					<td>Gambar</td>    
					<td><input type="file" name="gambar" required></td>  
				</tr>  
				<tr>    
					<td>Foto By</td>    
					<td><input type="text" name="foto_by" placeholder="Dari Mana asal foto" size="100" required></td>  
				</tr>
				<tr>    
					<td>Teks</td>    
					<td><textarea name="teks" placeholder="Masukan Isi Berita" cols="75" rows="10" required></textarea></td>
				 </tr>  
				 <tr>    
				 	<td><button type="submit"> Simpan </button></td>    
				 	<td><button type="button" onClick="location=('admin.php?tampilan=kelola_berita')"> Kembali </button></td>  
				 </tr>
				</table>
			</form>