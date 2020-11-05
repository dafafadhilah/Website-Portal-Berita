<?php
session_start(); //memulai membaca sesi
unset($_SESSION['id_anggota']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['nama_lengkap']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['login']); //menghapus nilai sesi yang diregsitrasi
unset($_SESSION['loginadmin']);
unset($_SESSION['id_admin']);
session_destroy(); //menghancurkan sesi
header('location:../'); //mendirect ke index.php

?>