<?php
$servername="mindspaceconnection";
$dBUsername="n7zj77cjgp9673ei"; 
$dBPassword="g2xz0qa3uchr136m"; 
$dBName="loginsystem";


$conn= mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>
