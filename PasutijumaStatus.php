<?php
include 'conect.php';

$sql = "SELECT * FROM pasutijums";

$result = $conn -> query ($sql);

if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
      $Order_ID = $row['pasutijuma_id'];
      $Klienta_ID = $row['cilveka_id'];
      $Produkta_ID = $row['produkta_id'];
      $Adrese_ID = $row['adreses_id'];
      $order_date = $row['datums'];
      $order_status = $row['pas_status'];
      
?>
 <ul>
    <li>
       <p>Sūtijuma ID</p>
       <p><?php echo $Order_ID ?></p>
    </li>
    <li>
       <p>Lietotāja ID</p>
       <p><?php echo $Klienta_ID ?></p>
    </li>
    <li>
       <p>Produkta ID</p>
       <p><?php echo $Produkta_ID ?></p>
    </li>
    <li>
       <p>Adreses ID</p>
       <p><?php echo $Adrese_ID ?></p>
    </li>
    <li>
       <p>Pasūtijuma laiks</p>
       <p><?php echo $order_date ?></p>
    </li>
    <li>
       <p>Pasūtijuma statuss</p>
       <p><?php echo $order_status ?></p>
    </li>
    
 </ul>
 
   <form method="post">
     <select name "statuss">
       <option value="Pasūtīts">Pasūtīts</option>
       <option value="Sagatavo">Sagatavo</option>
       <option value="Izsūtīts">Izsūtīts</option>
     </select>
     <input type="submit" name="submit" value="ievietot">
    </form>
    <?php
    $StatussChange = $_POST['statuss'];
    $sqlUpd = "UPDATE pasutijums SET pas_status = '$statusChange'";
    if($conn->query($sqlUpd)===TRUE){
    echo "Statuss samainīts!";
    }else{
    echo "bloody bastard";
    mysqli_error($conn);
      }   
   }
}
?>

