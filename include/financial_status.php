<?php
	
	mysql_connect("localhost", "techiebt_rohit","techbastard29");

	mysql_select_db("techiebt_farmer");
	//Run a query
	$result = mysql_query("SELECT * FROM financial_status")
?>  
<head>
<title>Full_databse</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</script>
<link rel="stylesheet" type="text/css" href="gooeymenu.css" />
<script type="text/javascript" src="ajax.js"></script>
<link href="pp.css" rel="stylesheet" type="text/css" />

<script src="gooeymenu.js">
</script>


</head>

<body>


<ul id="gooeymenu1" class="gelbuttonmenu">
<li><a href="index.html">Home</a></li>
<li><a href="index.html#section2">About</a></li>
<li><a href="table_s.php">Table_Structure</a></li>
</ul>

<script>
gooeymenu.setup({id:'gooeymenu1', selectitem:1})
</script>



<hr />
	<div class="container">
	<h1>financial_status</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>f_id</th>
			<th>revenue</th>
			<th>profit/loss</th>
			<th>resource_investment</th>
			<th>acc_no</th>
 			<th>l_no</th>
		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['f_id'] . "</td>";
				echo "<td>" . $row['revenue'] . "</td>";
                               	echo "<td>" . $row['profit_loss'] . "</td>";
                               	echo "<td>" . $row['resource_investment'] . "</td>";
                               	echo "<td>" . $row['acc_no'] . "</td>";
                                echo "<td>" . $row['l_no'] . "</td>";
				
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<center><a href="output.php" class="css3dbutton">Go To output</a></center>









</body>
</html>
