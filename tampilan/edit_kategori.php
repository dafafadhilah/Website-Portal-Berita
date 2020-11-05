<?php 
include"pengaturan/koneksi.php";
$id_kategori=$_GET['id_kategori'];
$kategori=mysqli_fetch_array(mysqli_query($koneksi,"select*from kategori where id_kategori='$id_kategori'"));?>
<h2> Edit Kategori</h2>
<form action="perintah/kelola_kategori.php?aksi=edit" method="post" enctype="multipart/form-data" name="form1">
	<input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">
	<table width="50%" border="1" cellspacing="0" cellpadding="0">  
		<tr>    
			<td>Nama Kategori</td>    
			<td><input type="text" name="kategori" required value="<?php echo $kategori['kategori']; ?>"></td>  
		</tr>   
		<tr>    
			<td><button type="submit"> Simpan </button></td>    
			<td><button type="button" onClick="location=('admin.php?tampilan=kelola_kategori')"> Kembali </button></td>  
		</tr>
	</table>
</form>