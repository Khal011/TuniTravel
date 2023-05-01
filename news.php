<?php

include "testphp.php";


$email=$_GET["email"];


$req=mysqli_query($link,"insert into newsletter(email) values('$email')");

if($req)
{
    echo"insertion réussite";
 
}
else{
    echo"erreur d'insertion";
}

?>