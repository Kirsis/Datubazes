<?php

        $Produkctid = $_GET['produkta_id'];
        $Nosaukums = $_GET['produkta_vards'];
        $Cena = $_GET['produkta_cena'];
?>

<h1>Jūsu pirkums</h1>
<h3><?php echo $Nosaukums . " cena " . $Cena . " € " ?></h3>
<h2>Ievadiet Sūtijuma datus lai veiktu pirkumu:</h2>
<form method="post">
        <input type="text" name="vards" Placeholder="Vārds">
        <input type="text" name="uzvards" Placeholder="Uzvārds">
        <input type="text" name="telefona_nr" Placeholder="Telefona num">
        <input type="text" name="valsts" Placeholder="Valsts">
        <input type="text" name="pilseta" Placeholder="Pilsēta">
        <input type="text" name="iela" Placeholder="Iela">
        <input type="text" name="pasta_index" Placeholder="Pasta indekss">
        <input type="submit" name="submit" Placeholder="Iesniegt">
</form>

<?php
include 'conect.php';
if(isset($_POST['submit'])){
        $vards = $_POST['vards'];
        $uzvards = $_POST['uzvards'];
        $tel_num = $_POST['telefona_nr'];
        $valsts = $_POST['valsts'];
        $pilseta = $_POST['pilseta'];
        $iela = $_POST['iela'];
        $pasta_indekss = $_POST['pasta_index'];
        
        $sql = "INSERT INTO cilveka_vieta (valsts, pilseta, iela, pasta_index) VALUES ('$valsts','$pilseta','$iela','$pasta_indekss')";
        if(mysqli_query($conn,$sql)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
        
        $sqlGet = "SELECT * FROM cilveka_vieta Where iela like '$iela'";
        $result = $conn -> query($sqlGet);
        while($row = $result->fetch_assoc()){
           $adrese_id = $row['adreses_id'];
        }
        
        $sqlUser = "INSERT INTO cilveka_info (vards, uzvards, telefona_nr) VALUES ('$vards','$uzvards','$tel_num')";
        if(mysqli_query($conn,$sqlUser)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
        
        $sqlGetCust = "SELECT * FROM cilveka_info WHERE uzvards like '$uzvards' AND telefona_nr like '$tel_num'";
        $result2 = $conn -> query($sqlGetCust);
        while($row = $result2->fetch_assoc()){
           $klienta_id = $row['cilveka_id'];
        }
        
        $sqlOrder = "INSERT INTO pasutijums (cilveka_id, produkta_id, adreses_id) VALUES ('$klienta_id','$Produkctid','$adrese_id')";
        if(mysqli_query($conn,$sqlOrder)){
           echo "dati pievienoti";
        }else{
           echo "Neizdevās";
           mysqli_error($conn);
        }
}
?>
        
        
        
        
