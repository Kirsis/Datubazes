<?php
include "conect.php";

$sql = "SELECT * FROM produkts";
$result = $conn-> query ($sql);

if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
        $Nosaukums = $row['produkta_vards'];
        $Bilde = $row['produkta_bilde'];
        $Productid = $row['produkta_id'];
        ?>
        <?php echo "<a href='ProdSpiez.php?produkts=" . $Productid ."'>" ?>
        <h1><?php echo $Nosaukums ?></h1>
        <img src="<?php echo $Bilde ?>" alt="<?php echo $Nosaukums ?>" width="300">
        <?php
        }
}else {
        echo "nav rezultātu";
}
$conn-> close();
?>