function setHeight(){
	parent.document.getElementById('work-data-frame').style.height = document['body'].offsetHeight +'px';
}

function equateColumnHeights(){
	document['body'].offsetHeight = parent.document.getElementById('title-names').style.height+'px';
}

function displayResume(){
	document.getElementById('resume').style.height =
document['body'].offsetHeight + 'px';
}
