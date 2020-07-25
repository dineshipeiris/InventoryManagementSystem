<html>
<body>

<html>
<body>

<?php

$con = mysql_connect(<domainname>,<username>,<password>);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8175054_vlacdb", $con);

$result=mysql_query("SELECT p_id,name,quantity FROM a_product WHERE deleted = 0");
echo "<table border='1'>
<tr>
<th>Product id</th>
<th>Product name</th>
<th>Quantity</th>
</tr>";

while($row = mysql_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['p_id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "</tr>";
	}
echo "</table>";
if (isset($_POST['submit1']))
{
$product=$_POST['productname'];
$quan=$_POST['addquantity'];
$prevquan=mysql_query("SELECT quantity FROM a_product WHERE name = '$product'");
while($rw = mysql_fetch_array($prevquan))
  {
  $current= $rw['quantity'];  
  }
$sum=$current+$quan;
mysql_query("UPDATE a_product SET quantity=$sum WHERE name = '$product'");
mysql_close($con);
}
?> 

<fieldset> 
<legend style="font-size:15px;"><b>Add Product to Stock</b></legend>
<form method="post">
<table>
<tr>
<td>Product name:</td> <td><input type="text" name="productname"  /></td>
</tr>
<tr>
<td>Add Quantity:</td><td><input type="text" name="addquantity" /></td>
</tr>
</table>	
<input type="submit" name="submit1" value="Add to Stock" />
</form>
</fieldset>

</body>
</html> 