<?php

include "testphp.php";

$name=$_GET["name"];
$email=$_GET["email"];

$message=$_GET["message"];

$req=mysqli_query($link,"insert into clients(name,email,message) values('$name','$email','$message')");

if($req)
{
    echo"insertion réussite";
 
}
else{
    echo"erreur d'insertion";
}

?>