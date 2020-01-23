document.querySelector('button').addEventListener('click', function() {
	var input = document.querySelector('input').value;
	alert(input.replace(/\s/g,'').length)
})