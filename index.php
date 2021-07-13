<html>
<head>
</head>
<body>

<?php
 include 'Panemdats.php';

?>

<form action="" method="post">

        <h3>Ievadiet datus!</h3> <br/>
                <input type="text" name = "vards" Maxlength="25" value="Vārds" /> <br/>
                <input type="text" name = "uzvards" Maxlength="25" value="Uzvārds" /> <br/>
                <input type="tel" name = "telefona_nr" Size="8" Maxlength="8" value="Telefona nr" /> <br/>
        <h3>Atrašanās vieta</h3> <br/>
                <input type="text" name = "valsts" Maxlength="25" value="Valsts" /> <br/>
                <input type="text" name = "pilseta" Maxlength="25" value="Pilsēta" /> <br/>
                <input type="text" name = "iela" Maxlength="25" value="Iela/Māja" /> <br/>
                <input type="text" name = "pasta_index" Maxlength="7" value="Pasta Index" /> <br/>
        <h3>Piegādes veids</h3> <br/>
                <input type="radio" size="20" name="Atbilde">DPD<br>
                <input type="radio" size="20" name="Atbilde">Omniva<br> <br />
                <input type="submit" name = "submit" value="submit" /> <br />

</form>


<!--
Preces nosaukums: 
<input type="text" Maxlength="25" /> <br/>
Preces cena: 
<input type="number" Maxlength="7" /> <br/>
Noliktavā: 
<input type="text" Maxlength="3" /> <br/>
//-->



</body>
</html>