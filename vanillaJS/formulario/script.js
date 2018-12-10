document.querySelector('form').addEventListener('submit', function(e){
	e.preventDefault()

	var result = validInput(document.querySelectorAll('input'))

	if (result) {
		var input_nome = ""

		for (i = 0; i < result.length; i++) {
			
			var div = document.querySelector("#"+result[i]).parentElement

			// var msg = document.createElement('div')
			// var text = document.createTextNode('Preencha o campo '+ result[i])
			// msg.appendChild(text)
			// msg.classList.add('msg')

			// div.appendChild(msg)

			var msg = div.querySelector('.msg')
			msg.classList.add('active')

			// Se contém
			if (msg.classList.contains('active')) {
				console.log('contem ativo')

			} else {

			}
		}


	} else {
		console.log('Todos os inputs preenchidos')
	}



	console.log('ok')
})


var inputPress = function () {
	var msg = document.querySelectorAll('.msg').length;
	for (i = 0; i < msg; i++) {
		document.querySelector('.msg').classList.remove('active')
	}
}



var validInput = function (elemento) {
	var vazio = 0
	var input = new Array()
	for (i = 0; i < elemento.length; i++) {
		if (elemento[i].value == "") {
			input.push(elemento[i].id)
			vazio++
		}
	}

	if (input.length > 0) {
		return input 
	} else {
		return false
	}
}


