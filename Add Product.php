<html>
<body>

<?php
if (isset($_POST['submit1']))
{
$con = mysql_connect(<domainname>,<username>,<password>);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a8175054_vlacdb", $con);

$sql="INSERT INTO a_product(name,unit,quantity,description)
VALUES
('$_POST[productname]','$_POST[unit]',
'$_POST[quantity]','$_POST[description]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 echo "1 record added";
mysql_close($con);
}
?> 

<fieldset> 
<legend style="font-size:15px;"><b>Add a New Product</b></legend>
<form method="post">
<table>
<tr>
<td>Product name:</td> <td><input type="text" name="productname"  /></td>
</tr>
<tr>
<td>Unit:</td><td><input type="radio" name="unit" value='L'/>L</td>
</tr>
<tr>
<td></td><td><input type="radio" name="unit" value='kg' />kg</td>
</tr>
<tr>
<td>Quantity:</td><td><input type="text" name="quantity" /></td>
</tr>
<tr>
<td>Description:</td><td><textarea name="description" rows='10' cols='80'>
             </textarea></td>
</tr>
</table>	
<input type="submit" name="submit1" value="Add" />
</form>
</fieldset>

</body>
</html> 