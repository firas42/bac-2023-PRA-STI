<?php
$con=mysqli_connect("localhost","root","","2023") or die(mysqli_error($con));
$c=$_POST["ch"];
$cin=$_POST["cin"];
$du=$_POST["du"];
$req="SELECT * FROM `habit` WHERE `codeHab`=$c";
$res=mysqli_query($con,$req);
$r=mysqli_fetch_row($res);
if($r[4]=="N")
{
    echo("HABIT no disp");
}
else{
$req2="SELECT * FROM `client` WHERE `cin`='$cin'";
$res2=mysqli_query($con,$req2);
if(mysqli_num_rows($res2)==0)
{echo("client n'esxite pas");}

else{
$req3="INSERT INTO `location`(`dateLoc`, `codeHab`, `cin`, `duree`) VALUES (now(),'$c','$cin','$du')";
mysqli_query($con,$req3);

$req4="UPDATE `habit` SET `disponible`='N'WHERE `codeHab`='$c'";
mysqli_query($con,$req4);



echo(mysqli_affected_rows($con)."location ajoutée");

}
}



