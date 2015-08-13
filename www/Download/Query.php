<html>
<link rel="stylesheet" href="CMS_2.css" />

<script type="text/javascript">

function allowDrop(ev){
	ev.preventDefault();	
}

function dragenter(ev){

     ev.preventDefault();
     ev.style.background = "SkyBlue";
     
}

function drag(ev){
	ev.dataTransfer.setData("content", ev.target.id);
}

function drop(ev){
	ev.preventDefault();
	var image= ev.dataTransfer.getData("content");
	ev.target.appendChild(document.getElementById(image));
}

</script>

<?php

$connect = mysql_connect("localhost", "root", "root");

mysql_select_db("content");

$query = mysql_query("SELECT * FROM blog WHERE title = 'Arctic Monkeys'");

?>
<body>
<div id ="container">
<div class ="quad" id ="leftBox">

<?php
while($rows = mysql_fetch_array($query)){
	$title = $rows['title'];
	$article = $rows['article'];
	$video = $rows['video'];
	
	
	echo "<h1>$title<br></h1>";
	echo"<div>$article</div>";
	
	
}

?>
</div>

<div class ="quad" id="bottomLeftBox">
 	<div class="inner" id="bl4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="inner" id="bl4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="inner" id="bl4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="inner" id="bl4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>


</div>

<div id ="imageSelect" class="longBox">

<div id ="imageSelect1" class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img src="images/arcticMonkeys.jpg" alt="Guitar" id="Guitar" draggable="true" ondragstart="drag(event)"/>
</div>
<div id ="imageSelect2" class="inner"><img src="images/suckItAndSee.jpg" alt="image2" id="image2" height="250px" width="250px" draggable="true" ondragstart="drag(event)"/>
</div>
<div id ="imageSelect3" class="inner"><img src="images/whateverPeopleSayIAm.jpg" alt="image3" id="image3" height="250px" width="250px" draggable="true" ondragstart="drag(event)"/>
</div>
<div id ="imageSelect4" class="inner"><img src="images/am.jpg" alt="image4" id="image4" height="250px" width="250px" draggable="true" ondragstart="drag(event)"/>
</div>

</div>


</body>
</html>