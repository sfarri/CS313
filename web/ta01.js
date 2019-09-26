function clicked() {
    alert('Clicked!');
}

function changeColor() {
	var text = document.getElementById("boxcolor");
	var changableDiv = document.getElementById("changable");
	changableDiv.style.backgroundColor = text.value;
}
