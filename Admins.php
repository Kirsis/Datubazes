<?php 
include 'conect.php';
$sql2 = "SELECT product.id, product.prheading, product.primg, product.prtxt, 
aboutus.id, aboutus.headingab, aboutus.img, aboutus.text, 
header.id, header.logo, header.header1, header.header2, header.header3, header.header4, header.bgimg, header.heading, 
contact.id, contact.phone, contact.adress, contact.map 
FROM aboutus 
JOIN header 
ON aboutus.id = header.id 
JOIN product 
ON product.id = header.id 
JOIN contact 
ON contact.id = header.id";
$result = $conn -> query($sql2);

if($result -> num_rows > 0){
 while($row = $result -> fetch_assoc()){
         $dblogo = $row['logo'];
         $dbh1 = $row['header1'];
         $dbh2 = $row['header2'];
         $dbh3 = $row['header3'];
         $dbh4 = $row['header4'];
         $dbbgimg = $row['bgimg'];
         $dbheading = $row['heading'];
         $dbabheading = $row['headingab'];
         $dbabimg = $row['img'];
         $dbabtxt = $row['text'];
         $dbprhead = $row['prheading'];
         $dbprimg = $row['primg'];
         $dbprtxt = $row['prtxt'];
         $dbcophone = $row['phone'];
         $dbcoadress = $row['adress'];
         $dbcomap = $row['map'];
         
         
?>

<form method="post">
        <label for="logo">Logo saite</label><br>
        <input type="text" name="logo" value="<?php echo $dblogo ?>"><br>
        <label for="header1">Sadaļa 1</label><br>
        <input type="text" name="header1" value="<?php echo $dbh1 ?>"><br>
        <label for="header2">Sadaļa 2</label><br>
        <input type="text" name="header2" value="<?php echo $dbh2 ?>"><br>
        <label for="header3">Sadaļa 3</label><br>
        <input type="text" name="header3" value="<?php echo $dbh3 ?>"><br>
        <label for="header4">Sadaļa 4</label><br>
        <input type="text" name="header4" value="<?php echo $dbh4 ?>"><br>
        <label for="bgimg">BG attēls</label><br>
        <input type="text" name="bgimg" value="<?php echo $dbbgimg ?>"><br>
        <label for="heading">Virsraksts</label><br>
        <input type="text" name="heading" value="<?php echo $dbheading ?>"><br>
        <label for="headingab">Par mums virsraksts</label><br>
        <input type="text" name="headingab" value="<?php echo $dbabheading ?>"><br>
        <label for="abimg">Par mums attēls</label><br>
        <input type="text" name="abimg" value="<?php echo $dbabimg ?>"><br>
        <label for="abtxt">Par mums teksts</label><br>
        <input type="text" name="abtxt" value="<?php echo $dbabtxt ?>"><br>
        <label for="prheading">Produkta virsraksts</label><br>
        <input type="text" name="prheading" value="<?php echo $dbprhead ?>"><br>
        <label for="primg">Produkta attēls</label><br>
        <input type="text" name="primg" value="<?php echo $dbprimg ?>"><br>
        <label for="prtxt">Produkta teksts</label><br>
        <input type="text" name="prtxt" value="<?php echo $dbprtxt ?>"><br>
        <label for="phone">Kontakta tālrunis</label><br>
        <input type="text" name="phone" value="<?php echo $dbcophone ?>"><br>
        <label for="adress">Adrese</label><br>
        <input type="text" name="adress" value="<?php echo $dbcoadress ?>"><br>
        <label for="map">Karte</label><br>
        <?php echo $dbcomap ?>
        <input type="text" name="map"><br>
        
        
        <input type="submit" name="submit" value="Saglabāt">
</form>

<?php
    }
}
if(isset($_POST['submit'])){

        header("Location: Admin.php");
        
         $logo = $_POST['logo'];
         $h1 = $_POST['header1'];
         $h2 = $_POST['header2'];
         $h3 = $_POST['header3'];
         $h4 = $_POST['header4'];
         $bgimg = $_POST['bgimg'];
         $heading = $_POST['heading'];
         $abheading = $_POST['headingab'];
         $abimg = $_POST['img'];
         $abtxt = $_POST['text'];
         $prhead = $_POST['prheading'];
         $primg = $_POST['primg'];
         $prtxt = $_POST['prtxt'];
         
         $sql = "UPDATE header SET logo='$logo', header1='$h1', header2='$h2', header3='$h3', header4='$h4', 
         bgimg='$bgimg', heading='$heading' WHERE id=1";
         
         $sqlab = "UPDATE aboutus SET headingab='$abheading', img='$abimg', text='$abtxt'
         WHERE id=1";
         
         $sqlpr = "UPDATE product SET prheading='$prhead', primg='$primg', prtxt='$prtxt'";
                 
         if((mysqli_query($conn, $sql))&&(mysqli_query($conn, $sqlab))&&(mysqli_query($conn, $sqlpr))){
                 echo "Dati pievienoti";
         }else{
                 echo "Dati netika pievienoti";
                 mysqli_error($conn);
         }
}
?>
         
  