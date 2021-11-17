<?php
// untuk mengecek DONE is valid.
session_start();
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        // untuk menampilkan jika berhasil
        echo "Berhasil, berikut hasilnya : ".$_POST["data"]; 
    }
    else{
        // untuk menampilkan jika hasil gagal
	    echo "Maaf, hasil GAGAL";
    }
?>