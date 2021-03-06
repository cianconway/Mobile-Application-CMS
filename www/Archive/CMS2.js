// JavaScript Document

function doFirst(){
	pic = document.getElementById('James');
	pic = addEventListener("dragstart", startDrag, false);
	pic = addEventListener("dragend", endDrag, false);
	l1 = document.getElementById('l1')
	l1.addEventListener("dragenter", dragenter , false);
	l1.addEventListener("dragleave", dragleave , false);	
	l1.addEventListener("dragover", function(e){e.preventDefault();} , false);
	l1.addEventListener("drop", dropped, false);
	
	pic = document.getElementById('James');
	pic = addEventListener("dragstart", startDrag, false);
	pic = addEventListener("dragend", endDrag, false);
	r1 = document.getElementById('r1')
	r1.addEventListener("dragenter", dragenter , false);
	r1.addEventListener("dragleave", dragleave , false);	
	r1.addEventListener("dragover", function(e){e.preventDefault();} , false);
	r1.addEventListener("drop", dropped, false);
	
}

function endDrag(e){

	pic = e.target;
	pic.style.visibility = 'hidden';
	
}

function dragenter(e){

	e.preventDefault();
	l1.style.background = "SkyBlue";
	r1.style.background = "SkyBlue";
	
}

function dragleave(e){

	e.preventDefault();
	l1.style.background = "White";
	r1.style.background = "White";
	
}

function startDrag(e){

	var code = '<img src="images/James.png"/>';
	e.dataTransfer.setData('Text', code);
	
}

function dropped(e){

	e.preventDefault();
	l1.innerHTML = e.dataTransfer.getData('Text');
	r1.innerHTML = e.dataTransfer.getData('Text');

}

window.addEventListener("load", doFirst, false);