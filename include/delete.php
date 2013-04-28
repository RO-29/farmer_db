<html>
<body>

<?php

$item = $_POST['item'];

if($item=="farmer")
{
?>


<center>
<form action="farmer_i.php" method="post">
f_id:<input name="f_id" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>

<input type="submit" value="submit">
</form></center>

<?php
}


elseif($item=="bank_branch")
{
?>
<center>
<form action="bank_i.php" method="post">
br_id:<input name="br_id" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}


elseif($item=="account")
{
?>
<center>
<form action="account_i.php" method="post">
acc_no:<input name="acc_no" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}

elseif($item=="loan")
{
?>
<center>
<form action="loan_i.php" method="post">
l_no:<input name="l_no" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}

elseif($item=="land")
{
?>
<center>
<form action="land_i.php" method="post">
f_id:<input name="f_id" type="text">
location:<input name="location" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}

elseif($item=="resources")
{
?>
<center>
<form action="resources_i.php" method="post">
r_id:<input name="r_id" type="text">
f_id:<input name="f_id" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}


elseif($item=="financial_status")
{
?>
<center>
<form action="financial_status_i.php" method="post">
year:<input name="year" type="text">
f_id:<input name="f_id" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}




else
{
?>
<center>
<form action="output_i.php" method="post">
season:<input name="season" type="text">
f_id:<input name="f_id" type="text">
year:<input name="year" type="text">
<select name="ch"> 

<option>sure?</option>
<option>no</option>
<option>yes</option>
</select>
<input type="submit" value="submit">
</form></center>

<?php
}
?>


</body>
</html>