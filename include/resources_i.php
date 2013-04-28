<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
</head>

<?php

$connection = mysql_connect('localhost','techiebt_rohit','techbastard29');
mysql_select_db('techiebt_farmer');

$del1="no";
$del=$_POST['ch'];
$del1=$del;
$ln = intval($_POST['f_id']);
$in=intval($_POST['r_id']);
if($del1=="no")
{
$ln = intval($_POST['f_id']);
$in=intval($_POST['r_id']);
$lm=intval($_POST['qty']);
$lp=intval($_POST['unit_price']);
$l=intval($_POST['cost']);

$sql = "INSERT INTO resources VALUES ($in,$ln,'$_POST[r_name]',$lm,$lp,$l)";
}

$sql="DELETE FROM resources WHERE r_id='$in' and f_id='ln'";
mysql_query($sql) or trigger_error(mysql_error()." ".$sql);


if($del=="yes")
echo "one row deleted!";
else
echo "One row updated..!!";
?>

<center><a href="index.html" class="css3dbutton">Go To Home</a></center>
</body>
</html>
