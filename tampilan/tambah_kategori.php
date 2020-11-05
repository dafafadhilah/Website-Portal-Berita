<h2> Tambah Kategori</h2>
<form action="perintah/kelola_kategori.php?aksi=tambah" method="post" enctype="multipart/form-data" name="form1">
	<table width="50%" border="1" cellspacing="0" cellpadding="0">  
		<tr>    
			<td>Nama Kategori</td>    
			<td><input type="text" name="kategori" placeholder="Masukan Kategori" size="30" required></td>  
		</tr>  
		<tr>    
			<td><button type="submit"> Simpan </button></td>    
			<td><button type="button" onClick="location=('admin.php?tampilan=kelola_kategori')"> Kembali </button></td>  
		</tr>
	</table>
</form>