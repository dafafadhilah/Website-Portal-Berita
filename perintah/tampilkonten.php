<?php

//file tampil konten, di-include-kan di index, jadi anggaplah posisi file ini, adalah posisi file index.php
$tampilan=$_GET['tampilan']; //menerima variabel (bernama tampilan) yang dikirim dari tampilan.
switch($tampilan){
	case "kategori"; //apabila variabel tampilan berisi kategori
	include "tampilan/kategori.php"; //maka yang akan ditampilkan adalah halaman kategori.php di folder tampilan
	
	break;
	
	case "detailberita";
	include "tampilan/detailberita.php";
	break;
	
	
	case "cariberita";
	include "tampilan/cariberita.php";
	break;
	
	
	case "layananiklan";
	include "tampilan/layananiklan.php";
	break;
	
	
	case "login";
	include "tampilan/login.php";
	break;
	
	
	case "daftar";
	include "tampilan/tampildaftar.php";
	break;
	
	
	case "kelola_berita";
	include "tampilan/kelola_berita.php";
	break;
	
	
	case "edit_berita";
	include "tampilan/edit_berita.php";
	break;
	
	
	case "kelola_iklan";
	include "tampilan/kelola_iklan.php";
	break;

	
	case "kelola_kategori";
	include "tampilan/kelola_kategori.php";
	break;	


	case "edit_kategori";
	include "tampilan/edit_kategori.php";
	break;	


	case "tambah_iklan";
	include "tampilan/tambah_iklan.php";
	break;


	case "tambah_berita";
	include "tampilan/tambah_berita.php";
	break;


	case "tambah_kategori";
	include "tampilan/tambah_kategori.php";
	break;
	
	
	case "edit_iklan";
	include "tampilan/edit_iklan.php";
	break;
	
	
	case "kelola_anggota";
	include "tampilan/kelola_anggota.php";
	break;
	default: //default halaman yang tampil
	include "tampilan/home.php";
}


?>