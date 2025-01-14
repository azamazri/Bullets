<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bullets');
 
    if(!$conn){
        die("Error: Koneksi Gagal!");
    }
?>