<?php
$con=mysqli_connect("localhost","root","","2023") or die(mysqli_error($con));
$c=$_POST["sel"];
$des=$_POST["des"];
$t=$_POST["t"];
$p=$_POST["pr"];
$req="INSERT INTO `habit` VALUES ('AUTO_INCREMENT','$des','$t','$p','D','$c')";
mysqli_query($con,$req);
echo(mysqli_affected_rows($con)."habit ajouté");
mysqli_close($con);




?>