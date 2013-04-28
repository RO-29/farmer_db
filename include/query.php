<html>
<head>
<style>
table.db-table     { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th  { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td  { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
#page-wrap { position: relative; width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; } 
</style>
 </head>
 <body>
<?php 
 
 mysql_connect("localhost", "techiebt_rohit","techbastard29");

 mysql_select_db("techiebt_farmer");

$query = $_POST['query']; 
$result = mysql_query($query); 

$var = strpos($query,'drop');
$var1= strpos($query,'DROP');
$a=0;

if($var=="false" || $var1=="false")
{
 $a=-1;
  ?>


<div id="page-wrap">
<p> You don't Play Around With BRO'S DATABASE!!
</p>

<img src="true.jpg"/></div>
<?php

}

if (($result)||(mysql_errno() == 0)&&($a==-1)) 
{ 
  echo '<table class="db-table" cellpadding="0" cellspacing="0"><tr>'; 
  if (mysql_num_rows($result)>0) 
  { 
          //loop thru the field names to print the correct headers 
          $i = 0; 
          while ($i < mysql_num_fields($result)) 
          { 
       echo "<th>". mysql_field_name($result, $i) . "</th>"; 
       $i++; 
    } 
    echo "</tr>"; 
    
    //display the data 
    while ($rows = mysql_fetch_array($result,MYSQL_ASSOC)) 
    { 
      echo "<tr>"; 
      foreach ($rows as $data) 
      { 
        echo "<td align='center'>". $data . "</td>"; 
      } 
    } 
  }else{ 
    echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>"; 
  } 
  echo "</table>"; 
}

else{ $a=mysql_errno();
  echo "Error in running query :". mysql_error(); 
  echo $a;
} 
?>
</body>
</html>