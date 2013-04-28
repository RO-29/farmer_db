<html>
<head>
<meta charset="utf-8" />
<title>Tables from MySQL Database</title>
 
<style type="text/css">
table.db-table          { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th       { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td       { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }

label
{
width: 4em;
float: left;
text-align: right;
margin-right: 0.5em;
display: block
}

.submit input
{
margin-left: 4.5em;
} 
input
{
color: #781351;
background: #fee3ad;
border: 1px solid #781351
}

fieldset
{
border: 1px solid #781351;
width: 20em
}

legend
{
color: #fff;
background: #ffa20c;
border: 1px solid #781351;
padding: 2px 6px
}
</style>
 
</head>

<body>



<?php

 
$item = $_POST['item'];

if($item=="farmer")
{?>

<center>
<form action="farmer_i.php" method="post">
<fieldset>
<legend>
F_id:        <input name="f_id" type="text" label="name"><br>
f_name:      <input name="f_name" type="text" ><br>
age:         <input name="age" type="text"><br>
address:     <input name="address" type="text"><br>
education:   <input name="education" type="text"><br>
family_size: <input name="family_size" type="text"><br>
acc_no:      <input name="acc_no" type="text"><br>
l_no:        <input name="l_no" type="text"><br>
             <input type="submit" value="SUBMIT" />
</fieldset>
</form>
</center>
 <?php


}
elseif($item=="bank_branch")
{ ?>


<center>
<form action="bank_i.php" method="post">
<fieldset>
<legend>
bank_id: <input name="br_id" type="text" ><br>
bank_address: <input name="br_address" type="text" ><br>
bank_name:<input name="bank_name" type="text"><br>
<input type="submit" value="SUBMIT" />
</form>
</center>
 <?php



}

elseif($item=="account")
{
?>

<center>
<form action="account_i.php" method="post">
acc_no: <input name="acc_no" type="text" ><br>
balance: <input name="balance" type="text" ><br>
bank_id:<input name="br_id" type="text"><br>
<input type="submit" value="SUBMIT" />
</legend>
</fieldset>
</form>
</center>
<?php
}

elseif($item=="loan")
{
?>

<center>
<form action="loan_i.php" method="post">
<fieldset>
<legend>
l_no: <input name="l_no" type="text" ><br>
l_type:<input name="l_type" type="text" ><br>
interest_rate:<input name="interest_rate" type="text"><br>
l_amount:<input name="l_amount" type="text"><br>
l_period:<input name="l_period" type="text"><br>
bank_id:<input name="br_id" type="text"><br>
<input type="submit" value="SUBMIT" />
</legend>
</fieldset>

</form>
</center>
<?php
}
elseif($item=="land")
{
?>


<center>
<form action="land_i.php" method="post">
<fieldset>
<legend>

f_id: <input name="f_id" type="text" ><br>
location:<input name="location" type="text" ><br>
area:<input name="area" type="text"><br>
soil_type:<input name="soil_type" type="text"><br>
l_fertility<input name="l_fertility" type="text"><br>
land_rate:<input name="land_rate" type="text"><br>
owned/rented:<input name="own_or_rented" type="text"><br>
period_possessed:<input name="period_possessed" type="text"><br>

<input type="submit" value="SUBMIT" />
</legend>
</fieldset>
</form>
</center>

<?php
}
elseif($item=="resources")
{
?>

<center>
<form action="resources_i.php" method="post">
<fieldset>
<legend>
f_id: <input name="f_id" type="text" ><br>
r_id:<input name="r_id" type="text" ><br>
r_name:<input name="r_name" type="text"><br>
qty:<input name="qty" type="text"><br>
unit_price<input name="unit_price" type="text"><br>
cost_price:<input name="cost" type="text"><br>
<input type="submit" value="SUBMIT" />
</legend>
</fieldset>
</form>
</center>
<?php
}

elseif($item=="financial_status")
{
?>
<center>
<form action="financial_status_i.php" method="post">
<fieldset>
<legend>
f_id: <input name="f_id" type="text" ><br>
year:<input name="year" type="text" ><br>
revenue:<input name="revenue" type="text"><br>
profit_loss:<input name="profit_loss" type="text"><br>
resource_investment	<input name="resource_investment	" type="text"><br>
acc_no:<input name="acc_no" type="text"><br>
l_no:<input name="l_no" type="text"><br>
<input type="submit" value="SUBMIT" />
</legend>
</fieldset>
</form>
</center>
<?php


}

else
{

?>
<center>
<form action="financial_status_i.php" method="post">
<fieldset>
<legend>
f_id: <input name="f_id" type="text" ><br>
year:<input name="year" type="text" ><br>
season:<input name="season" type="text"><br>
crop_name:<input name="crop_name" type="text"><br>
total_produce<input name="total_produce" type="text"><br>
sale_rate:<input name="sale_rate" type="text"><br>
<input type="submit" value="SUBMIT" />
</legend>
</fieldset>
</form>
</center>
<?php
}
?>
</body>

</html>