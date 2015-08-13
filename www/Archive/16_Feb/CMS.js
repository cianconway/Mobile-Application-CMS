// JavaScript Document

function doFirst(){
	pic = document.getElementById('Guitar');
	pic = addEventListener("dragstart", startDrag, false);
	pic = addEventListener("dragend", endDrag, false);
	leftBox = document.getElementByClass('leftBox')
	leftBox.addEventListener("dragenter", dragenter , false);
	leftBox.addEventListener("dragleave", dragleave , false);	
	leftBox.addEventListener("dragover", function(e){e.preventDefault();} , false);
	leftBox.addEventListener("drop", dropped, false);
	
	
}

function endDrag(e){

	pic = e.target;
	pic.style.visibility = 'hidden';
	
}

function dragenter(e){

	e.preventDefault();
	leftBox.style.background = "SkyBlue";
	
}

function dragleave(e){

	e.preventDefault();
	leftBox.style.background = "White";
	
}

function startDrag(e){

	var code = '<img src="images/Guitar.png"/>';
	e.dataTransfer.setData('Text', code);
	
}

function dropped(e){

	e.preventDefault();
	leftBox.innerHTML = e.dataTransfer.getData('Text');

}

window.addEventListener("load", doFirst, false);