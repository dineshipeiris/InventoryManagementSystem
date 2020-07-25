<html>
<body>

<?php


$con = mysql_connect(<domainname>,<username>,<password>);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8175054_vlacdb", $con);
$result=mysql_query("SELECT p_id,name FROM a_product WHERE deleted = 0");
echo "<table border='1'>
<tr>
<th>Product id</th>
<th>Product name</th>
<th>Option</th>
</tr>";

while($row = mysql_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['p_id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['$_POST[submit1]'] . "</td>";
	echo "</tr>";
	if (isset($_POST['submit1']))
		{
		mysql_query("UPDATE a_product SET deleted=1");
		}
	}
echo "</table>";


mysql_close($con);

?> 

<fieldset> 
<form method="post">
<input type="submit" name="submit1" value="Delete" />
</form>
</fieldset>

</body>
</html> 