<?php
	
include_once(configure.php);
$connection = mysql_connect(DB_host,DB_username','DB_password');
mysql_select_db('DB_name');
	//Run a query
	$result = mysql_query("SELECT * FROM account")
?>  
<head>
<title>Full_databse</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../stylesheets/pp.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/ajax.js"></script>

<script src="../js/gooeymenu.js">
</script>
<link rel="stylesheet" type="text/css" href="../js/gooeymenu.css" />

</head>


<body>
<ul id="gooeymenu1" class="gelbuttonmenu">
<li><a href="../html/index.html">Home</a></li>
<li><a href="../html/index.html#section2">About</a></li>
<li><a href="../include/table_s.php">Table_Structure</a></li>
</ul>

<script>
gooeymenu.setup({id:'gooeymenu1', selectitem:1})
</script>



<hr />
	<div class="container">
	<h1>Accounts_details</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>account_no</th>
			<th>balance</th>
			<th>bank_id</th>
		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['acc_no'] . "</td>";
				echo "<td>" . $row['balance'] . "</td>";
				echo "<td>" . $row['br_id'] . "</td>";
				echo "</tr>";
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<center><a href="../include/loan.php" class="css3dbutton">Go To loan </a></center>

</body>
</html>