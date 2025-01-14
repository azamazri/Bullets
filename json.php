<?php
include 'config.php';

$conn = new mysqli("localhost", "root", "", "bullets");

if ($conn->connect_error) {
 die("Koneksi Gagal: " . $conn->connect_error);
} 

$sql = "SELECT * FROM db_video";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    while($row[] = $result->fetch_assoc()) {
        $tem = $row;
        $json = json_encode($tem);
    } 
} else {
 echo "0 results";
}
echo $json;
$conn->close();
?>