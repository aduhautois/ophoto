<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("ophotodb") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM collections") 
or die(mysql_error());  

echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>Age</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['collectionid'];
	echo "</td><td>"; 
	echo $row['collectiondate'];
	echo "</td></tr>"; 
} 

echo "</table>";
?>