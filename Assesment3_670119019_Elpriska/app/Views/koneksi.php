<?php 
 	$koneksi = new mysqli("localhost","root","","artnow");
 
	function __construct(){
		$koneksi = mysqli_connect($host, $username, $password, $database);
		if($koneksi){
			echo "Koneksi database MySQL dan PHP Berhasil ";
		}else{
			echo "Koneksi database MySQL dan PHP Gagal ";
		}
	}

 ?>