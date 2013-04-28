<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
</head>
<body>
<?php

$connection = mysql_connect('localhost','techiebt_rohit','techbastard29');
mysql_select_db('techiebt_farmer');
$del1="no";
$del=$_POST['ch'];

$del1=$del;


$br_id = intval($_POST['br_id']);
if($del1=="no")
$sql = "INSERT INTO bank_branch VALUES($br_id,'$_POST[br_address]','$_POST[bank_name]')";

else
sql="DELETE FROM bank_branch WHERE br_id='$br_id' ";
mysql_query($sql) or trigger_error(mysql_error()." ".$sql);


if($del=="yes")
echo "one row deleted!";
else
echo "One row updated..!!";
?>

<center><a href="index.html" class="css3dbutton">Go To Home</a></center>
</body>
</html>
