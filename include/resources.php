 <?php
	
	mysql_connect("localhost", "techiebt_rohit","techbastard29");

	mysql_select_db("techiebt_farmer");
	$result = mysql_query("select * from resources");
?>  
<head>
<title>Full_databse</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="pp.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajax.js"></script>
<script src="gooeymenu.js">
</script>
<link rel="stylesheet" type="text/css" href="gooeymenu.css" />

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
	<h1>Resources_details</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>r_id</th>
			<th>resource_name</th>
			<th>quantity</th>
			<th>unit_price</th>
			<th>total_cost</th>


		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['r_id'] . "</td>";
				echo "<td>" . $row['r_name'] . "</td>";
				echo "<td>" . $row['qty'] . "</td>";
				echo "<td>" . $row['unit_price'] . "</td>";
				echo "<td>" . $row['cost'] . "</td>";
				echo "</tr>";
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<center><a href="financial_status.php" class="css3dbutton">Go To Financial_status</a></center>









</body>
</html>
