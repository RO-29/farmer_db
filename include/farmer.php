<?php

	mysql_connect("localhost", "techiebt_rohit","techbastard29");

	mysql_select_db("techiebt_farmer");
	//Run a query
 	$result = mysql_query("select * from farmer");

 
?>  
<html>
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
	<h1>Farmer_details</h1>
	<table class="db-table cellspacing="0" cellpadding="0"border="2">
		<tr>	<th>farmer_id</th>
		         <th>name</th>
                 <th>age</th>                    
					<th>address</th>
                     	<th>education</th>"
                      	<th>family_size</th>

		      <th>account_no</th>
		       <th>loan_no</th>

		</tr>

		<?php
		while ($row = mysql_fetch_array($result)) {
				echo "<tr>";?>
				<?php
                              echo "<td>" . $row['f_id'] . "</td>";
                               ?>
			<?php	echo "<td>" . $row['f_name'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['education'] . "</td>";
echo "<td>" . $row['family_size'] . "</td>";
echo "<td>" . $row['acc_no'] . "</td>";
echo "<td>" . $row['l_no'] . "</td>";				echo "</tr>";
			}

			mysql_free_result($result);
			// Close the database onnection
                        mysql_close();
			?>
	</table>
	<p> </p>
	</div> 


<a href="bank.php" class="css3dbutton">Go to bank</a>









</body>
</html>
