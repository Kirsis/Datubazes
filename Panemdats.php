<?php
include 'conect.php';
if (isset($_POST['submit'])) {


$vards = $_POST["vards"];
$uzvards = $_POST["uzvards"];
$telefona_nr = $_POST["telefona_nr"];
$valsts = $_POST["valsts"];
$pilseta = $_POST["pilseta"];
$iela = $_POST["iela"];
$pasta_index = $_POST["pasta_index"];

$sql = "INSERT INTO cilveka_info (vards, uzvards, telefona_nr)
VALUES ('$vards', '$uzvards', '$telefona_nr')";


$sql2 = "INSERT INTO cilveka_vieta (valsts, pilseta, iela, pasta_index)
VALUES ('$valsts', '$pilseta', '$iela', 'pasta_index')";

if (($conn->query($sql)&&$conn->query($sql2)) === TRUE) {
echo "Jauns ieraksts veiksmīgi pievienots!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

}


?>