<?php
	
	mysql_connect("localhost", "techiebt_rohit","techbastard29");

	mysql_select_db("techiebt_farmer");
	//Run a query
	$result = mysql_query("SELECT * FROM loan")
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
	<h1>loan_details</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>bank_id</th>
			<th>l_no</th>
		       	<th>l_amount</th>
			<th>interest</th>
			<th>l_type</th>
        		<th>l_period</th>
		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['br_id'] . "</td>";
				echo "<td>" . $row['l_no'] . "</td>";
				echo "<td>" . $row['l_amount'] . "</td>";
				echo "<td>" . $row['interest_rate'] . "</td>";
				echo "<td>" . $row['l_type'] . "</td>";   
			       	echo "<td>" . $row['l_period'] . "</td>";
				echo "</tr>";
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<center><a href="land.php" class="css3dbutton">Go To land</a></center>









</body>
</html>
