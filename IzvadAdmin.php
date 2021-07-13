<?php
include 'conect.php';

$sql2 = "SELECT product.id, product.prheading, product.primg, product.prtxt,
aboutus.id, aboutus.headingab, aboutus.img, aboutus.text,
header.id, header.logo, header.header1, header.header2, header.header3, header.header4, header.bgimg, header.heading,
contact.id, contact.phone, contact.adress, contact.map
FROM _Product 
JOIN _aboutus 
ON _Product.id = aboutus.id 
JOIN _header 
ON _header.id = aboutus.id 
JOIN _contact 
ON _contact.id = header.id";

$result = $conn -> query($sql2);

if($result -> num_rows > 0){
 while($row = $result -> fetch_assoc()){
         $hdlogo = $row['logo'];
         $hdh1 = $row['header1'];
         $hdh2 = $row['header2'];
         $hdh3 = $row['header3'];
         $hdh4 = $row['header4'];
         $hdbgimg = $row['bgimg'];
         $hdheading = $row['heading'];
         $hdabheading = $row['headingab'];
         $hdabimg = $row['img'];
         $hdabtxt = $row['text'];
         $hdprhead = $row['prheading'];
         $hdprimg = $row['primg'];
         $hdprtxt = $row['prtxt'];
         $hdcophone = $row['phone'];
         $hdcoadress = $row['adress'];
         $hdcomap = $row['map'];
         
         
?>
alooaaa
<!DOCTYPE html>
<html lang="lv">
<head>
        <title>Admin izvade</title>
        <meta charset="utf-8">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.foot li {
  float: left;
  padding: 22px;
  list-style-type:none;
}
  
</style>  
</head>
<body>

<nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img scr"<?php echo $dblogo ?>" alt="Logo" width="50"></a>
        </div>
        <ul class="nav navbar-nav">
                <li class="active"><a href="IzvadAdmin.php"><?php echo $hdh1 ?></a></li>
                <li><a href="#"><?php echo $hdh2 ?></a></li>
                <li><a href="#"><?php echo $hdh3 ?></a></li>
                <li><a href="#"><?php echo $hdh4 ?></a></li>
        </ul>
        </div>
        </nav>
        
        <div class="bg-img">
                <img src"<?php echo $hdimg ?>" alt= "<?php echo $hdheading ?>" style="width:100%; height:600px;">
                <h1 class="bg-text" style="position: absolute;
                top: 30%;
                left: 50%;
                color: #fff;"><?php echo $hdheading ?></h1>
         </div>
         
         <div class="container">
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <img src="<?php echo $hdabimg ?>" alt="<?php echo $hdabheading ?>" style="max=width:560px">
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <h2><?php echo $hdabheading ?></h2>
                 <p><?php echo $hdabtxt ?></p>
                 </div>
                 </div>
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <h2><?php echo $hdprhead ?></h2>
                 <p><?php echo $hdprtxt ?></p>
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <img src="<?php echo $hdprimg ?>" alt="<?php echo $hdprhead ?>" style="max=width:300px">
                 </div>
                 </div>
                 
                 <footer>
                         <ul class= "foot">
                         <li><?php echo $dbcophone ?></li>
                         <li><?php echo $dbcoadress ?></li>
                         <li><?php echo $dbcomap ?></li>
                         </ul>
                 </footer>
                         
         
         </body>
         </html>
         
         <?php
         
         
         }
}

?>
         
