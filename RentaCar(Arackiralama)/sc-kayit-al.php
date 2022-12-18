<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arac";



$conn = new mysqli($servername, $username, $password, $dbname);
$new = mysqli_set_charset($conn, "utf8");
if($conn->connect_error)
{
    die("Bağlantı Hatası:" . $conn->connect_error);

}

if ($_POST) {
    $no = $_POST["Aracid"];

    $bul = "SELECT * FROM araclar where Arac_id='$no ' ";
    $kayit = $conn->query($bul);

}

$conn->close();

?>