<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database</title>
</head>

<body>

<?php

	mysql_connect("localhost","root","root");
    mysql_select_db("content");
    
	$res=mysql_query("select * from images");
	
	echo "<table>";
	while($row=mysql_fetch_array($res)){
		
		echo "<tr>";
		echo "<td>";?> <img src="<?php echo $row["images"]; ?>" height="250" width="250"/> <?php echo "</td>";
		
		echo "<td>"; echo $row["name"]; echo "</td>"; 	
		
		
		echo "</tr>";
	}
	echo"</table>";
?>

</body>
</html>