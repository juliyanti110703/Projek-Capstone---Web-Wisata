<?php 
//ini adalah kode php untuk membuat koneksi file database

$hostname = "localhost";  
$username = "root"; 
$password = ""; 
$database = "jwd_wisata"; 

$conn = mysqli_connect($hostname, $username, $password , 
$database);