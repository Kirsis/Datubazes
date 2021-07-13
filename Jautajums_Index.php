<?php
include 'conect.php';
?>

<form method = "post" action = "process.php">
        <label for="vards">Ievadiet jūsu vārdu</label><br>
        <input type="text" name="vards" placeholder="vards"><br>
        <?php $sql = "SELECT * FROM jautajumi";
                $result = $conn-> query ($sql);
                $punkti = 0;
                
        if($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
                $id = $row['id'];
                $jaut = $row['jaut'];
                $atb1 = $row['atb1'];
                $atb2 = $row['atb2'];
                $atb3 = $row['atb3'];
                $atb4 = $row['atb4'];
                $pareizi = $row['pareizi'];
                
                echo "<div class='jautajums-".$id."'><h1>" . $jaut . "</h1><br>";
                echo "<input type='radio' name='jaut-".$id."' value='1'><label for='atb1'>". $atb1 ."</label><br>";
                echo "<input type='radio' name='jaut-".$id."' value='2'><label for='atb2'>". $atb2 ."</label><br>";
                echo "<input type='radio' name='jaut-".$id."' value='3'><label for='atb3'>". $atb3 ."</label><br>";
                echo "<input type='radio' name='jaut-".$id."' value='4'><label for='atb4'>". $atb4 ."</label><br>";
                
                }
                }else{
                echo "nav rezultātu";
                }
                $conn-> close();
                
                ?>
                <input type="submit" name="submit" value="Iesniegt">
</form>
                