<html>
<body>

<?php
$con = mysql_connect(<domainname>,<username>,<password>);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8175054_vlacdb", $con);

$result=mysql_query("SELECT p_id,name,unit,quantity,description FROM a_product WHERE deleted = 0");
echo "<table border='1'>
<tr>
<th>Product id</th>
<th>Product name</th>
<th>Unit</th>
<th>Quantity</th>
<th>Description</th>
</tr>";



while($row = mysql_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['p_id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['unit'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "<td>" . $row['description'] . "</td>";
	echo "</tr>";
	}
echo "</table>";
mysql_close($con);
?> 

</body>
</html> 