<html lang="lv">
<head>
        <meta charset="UTF-8">
<?php

include 'conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$search_value=$_POST["search"];

$sql="select * from cilveka_info where vards like '%$search_value%'";

        $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){
            
            $vards = $row["vards"];
            $uzvards = $row["uzvards"];
            $telefona_nr = $row["telefona_nr"];
            
            
            ?><h1><?php echo $vards . " " . $telefona_nr . " " . $uzvards ?></h1><?php
        }   
   }
?>
</head>
</html>