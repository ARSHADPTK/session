<?php
session_start(); 
$a=$_SESSION['q'];
$b=$_SESSION['w'];
echo $a ."&nbsp". "Yor Phone number is" ."&nbsp".
 $b;
?>