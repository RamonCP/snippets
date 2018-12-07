


document.querySelector('form').addEventListener('submit', function(e){
	e.preventDefault()

	var result = validInput(document.querySelectorAll('input'))

	if (result) {
		console.log(result)

	} else {
		console.log('Todos os inputs preenchidos')
	}



	console.log('ok')
})


var validInput = function (elemento) {
	var vazio = 0
	var input = new Array()
	for (i = 0; i < elemento.length; i++) {
		if (elemento[i].value == "") {
			input.push([elemento[i].value,elemento[i].name])
			vazio++
		}
	}

	if (input.length > 0) {
		return input 

	} else {
		return false
	}

}