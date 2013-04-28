<html>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
<body>
<?php

$connection = mysql_connect('localhost','techiebt_rohit','techbastard29');
mysql_select_db('techiebt_farmer');

$del1="no";
$del=$_POST['ch'];
$del1=$del;
$fid=intval($_POST['f_id']);
if($del1=="no")
{
$age = intval($_POST['age']);
$fid=intval($_POST['f_id']);
$a=intval($_POST['acc_no']);
$l=intval($_POST['l_no']);
$f=intval($_POST['family_size']);

$sql = "INSERT INTO farmer VALUES ('$fid','$_POST[f_name]','$age','$_POST[address]','$_POST[education]','$f','$a','$l')";
}


else
$sql ="DELETE FROM farmer where f_id='$fid' ";

mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

if($del=="yes")
echo "one row deleted!";
else
echo "One row updated..!!";
?>
<center><a href="index.html" class="css3dbutton">Go To Home</a></center>
</body>
</html>