<br>
<a href="admin.php?tampilan=tambah_kategori"><button>Tambah</button> </a>
<table width="100%" border="1" cellspacing="0" cellpadding="0">  
	<tr>    
		<td width="2%" bgcolor="#CCCCCC">No </td>    
		<td width="31%" bgcolor="#CCCCCC">Kategori </td>
		<td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>  
	</tr><?php
include"../pengaturan/koneksi.php";
	$n=1;
	$query=mysqli_query($koneksi,"select* from kategori order by id_kategori desc");
	while($kategori=mysqli_fetch_array($query)){?>  
		<tr>
			<td><?php echo $n; ?></td>    
			<td><?php echo $kategori['kategori']; ?></td>
			<td width="18%"><?php echo "<a href=admin.php?tampilan=edit_kategori&id_kategori=$kategori[id_kategori]> <button> Edit </button></a>"; ?></td>    
			<td width="18%"><?php echo "<a href=perintah/kelola_kategori.php?aksi=hapus&id_kategori=$kategori[id_kategori]> <button> Hapus </button></a>"; ?></td>  
		</tr>  <?php  $n++; }  ?>
	</table>