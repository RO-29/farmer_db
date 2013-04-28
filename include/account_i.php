<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="button.css">
</head>
<?php
include_once(configure.php);
$connection = mysql_connect(DB_host,DB_username','DB_password');
mysql_select_db('DB_name');
$del1="no";
$del=$_POST['ch'];
$del1=$del;

$acc_no = intval($_POST['acc_no']);
if($del=="no")
{
$acc=intval($_POST['balance']);
$b=intval($_POST['br_id']);
$sql = "INSERT INTO account VALUES($acc_no,$acc,$bid)";
}


$sql="DELETE FROM account WHERE acc_no='$acc_no'";
mysql_query($sql) or trigger_error(mysql_error()." ".$sql);

if($del1=="no")
echo "Row Updated";

else
echo "Row deleted";

?>



<center><a href="index.html" class="css3dbutton">Go To Home</a></center>

</body>
</html>

