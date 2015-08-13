<?php

$connect = mysql_connect("localhost", "root", "root");

mysql_select_db("content");

$query = mysql_query("SELECT * FROM blog WHERE title = 'Arctic Monkeys'");


echo"<table border=1></div>
<tr>
<th>Title<</th>
<th>Article</th>
</tr>";
while($rows = mysql_fetch_array($query)){
	$title = $rows['title'];
	$article = $rows['article'];
	$video = $rows['video'];
	
	echo"<tr>";
	echo "<td>" . $title['title'] . "</td>";
	echo "<td>" . $article['article' . "</td>"];
	echo "<td>" . $video['video' . "</td>"];
	echo"</tr>";
	
}

echo"</table>";

?>