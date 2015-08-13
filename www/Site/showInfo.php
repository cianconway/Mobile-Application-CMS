<?php

	mysql_connect("127.0.0.1","root","root");
    mysql_select_db("content");
	
	
	if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT * FROM 'blog' WHERE 'id' = '$id'");
	while($row = mysql_fetch_assoc($query))
	{
		$imageData = $row["image"];
	}
	header("content-type :image/jpeg"); //This whole page is just an image nothing else here except image
	//Edit so that when uploading files to database request file type also and sort using that too so when retreiving $imageType instead
	//of above as jpegs are hardcoded into system
	
	echo $imageData;
}
	else
	{
		echo "Error";	
	}

?>
