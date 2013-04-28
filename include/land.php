<?php
	
	mysql_connect("localhost", "techiebt_rohit","techbastard29");

	mysql_select_db("techiebt_farmer");
	//Run a query
	$result = mysql_query("SELECT * FROM land")
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
	<h1>Land_details</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>f_id</th>
			<th>location</th>
			<th>area</th>
			<th>soil_type</th>
			<th>l_fertility</th>
			<th>land_rate</th>
			<th>owned/rented</th>
			<th>period_possesed</th>
		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row['f_id'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['area'] . "</td>";
				echo "<td>" . $row['soil_type'] . "</td>";
				echo "<td>" . $row['l_fertility'] . "</td>";
				echo "<td>" . $row['land_rate'] . "</td>";
				echo "<td>" . $row['own_or_rented'] . "</td>";
				echo "<td>" . $row['period_possessed'] . "</td>";
				echo "</tr>";
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<center><a href="resources.php" class="css3dbutton">Go To resources</a></center>









</body>
</html>
