parte01.php

<?PHP
mysql_connect("localhost", "user", "password");     			
mysql_select_db("database");
?>


<?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=x"; include("parte03.php");?>


parte03.php

<?php
$query = mysql_query($sql);

while($sql = mysql_fetch_array($query))
{
$campo = $sql["Texto"];
echo $campo;
}
?>
