<?php
session_start(); 
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$_SESSION['q']=$a;
$_SESSION['w']=$b;
echo $a; 
echo  "<br>" ;
echo $b;
?>
<html>
<body>
<form method="post" action="3.php">
<input type="submit" name="btn2" value="submit">
</form>
</body>
</html>
