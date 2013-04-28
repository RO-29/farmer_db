<html>
<head>
<link rel="stylesheet" type="text/css" href="button.css"></head>
<?php

$connection = mysql_connect('localhost','techiebt_rohit','techbastard29');
mysql_select_db('techiebt_farmer');


$del1="no";

$del=$_POST['ch'];
$de1l=$del;



$ln = intval($_POST['l_no']);
if($del1=="no")

{
$in=intval($_POST['interest_rate']);
$lm=intval($_POST['l_amount']);
$lp=intval($_POST['l_period']);
$br=intval($_POST['br_id']);
$sql = "INSERT INTO loan VALUES ($ln,'$_POST[l_type]',$in,$lm,$lp,$br)";
}
else
$sql="DELETE FROM loan WHERE l_no='$ln'";

mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

if($del=="yes")
echo "one row deleted!";
else
echo "One row updated..!!";




?>
<center><a href="index.html" class="css3dbutton">Go To Home</a></center>
</body>
</html>
