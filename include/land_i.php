<html>
<head>
<link rel="stylesheet" type="text/css" href="button.css"></head>
<?php

$connection = mysql_connect('localhost','techiebt_rohit','techbastard29');
mysql_select_db('techiebt_farmer');

$del1="no";
$del=$_POST['ch'];
$del1=$del;


$ln = intval($_POST['f_id']);
if($del1=="no")
{
$in=intval($_POST['area']);
$lm=intval($_POST['land_rate']);
$lp=intval($_POST['period_possessed']);

$sql = "INSERT INTO land VALUES ($ln,'$_POST[location]',$in,'$_POST[soil_type]','$_POST[l_fertility]',$lm,'$_POST[own_or_rented]',$lp)";
}

else
$sql="DELETE FROM land WHERE f_id='$ln' and location='$_POST[location]'";
mysql_query($sql) or trigger_error(mysql_error()." ".$sql);


if($del=="yes")
echo "one row deleted!";
else
echo "One row updated..!!";


?>
<center><a href="index.html" class="css3dbutton">Go To Home</a></center>
</body>
</html>