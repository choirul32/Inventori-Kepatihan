<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'plti';
 
mysql_connect($host, $username, $password) or die('Maaf! Tidak Bisa Melakukan Koneksi Ke Database');
mysql_select_db($database) or die ('Database tidak ditemukan');
 
?>