// Vanilla Javascript



document.addEventListener('DOMContentLoaded', function(){
	console.log("12312");
	function jumpTo(path,confirmMessage) {
		var answer = confirm(confirmMessage);
		if (answer == 1)	{
			location.href = path;
		}
	}


}, false);

function setNumber(){
	var number = document.getElementById("numberadd").value;
	console.log("change")
}