<?php
include 'conect.php';
?>

<form method = "post">
        <label for="jaut">Jautājumi</label><br>
        <input type="text" name="jaut" placeholder="Jautājums"><br>
        <label for="atb1">Atbilde 1</label><br>
        <input type="text" name="atb1" placeholder="Atbilde 1"><br>
        <label for="atb2">Atbilde 2</label><br>
        <input type="text" name="atb2" placeholder="Atbilde 2"><br>
        <label for="atb3">Atbilde 3</label><br>
        <input type="text" name="atb3" placeholder="Atbilde 3"><br>
        <label for="atb4">Atbilde 4</label><br>
        <input type="text" name="atb4" placeholder="Atbilde 4"><br>
        <label for="pareizais">Kura būs pareizā atbilde:</label><br>
        <select name="pareizais" id="pareizais">
                <option value="1">Pareizā atbilde ir 1</option>
                <option value="2">Pareizā atbilde ir 2</option>
                <option value="3">Pareizā atbilde ir 3</option>
                <option value="4">Pareizā atbilde ir 4</option>
        </select>
                <input type="submit" value="submit">
</form>

<?php

if (isset($_POST['submit'])) {

	$jaut = $_POST['jaut'];
	$atb1 = $_POST['atb1'];
        $atb2 = $_POST['atb2'];
        $atb3 = $_POST['atb3'];
        $atb4 = $_POST['atb4'];
        $pareizaAtb = $_POST['pareizais'];
        
         $sqlget = "SELECT * FROM jautajumi WHERE jaut = '$jaut'";
        $query = mysqli_query($conn, $sqlget);
        
        if(mysqli_num_rows($query)){
 echo "Ir jau šitāds jautājums";
        } else{

$sql = "INSERT INTO jautajumi (jaut, atb1, atb2, atb3, atb4, pareizais) 
        VALUES ('$jaut', '$atb1','$atb2','$atb3','$atb4', '$pareizaAtb')";
        
        if(mysqli_query($conn, $sql)){
          echo "Dati pievienoti";
        }else{
          echo "neizdevās";
          mysqli_error($conn);
}
}
}