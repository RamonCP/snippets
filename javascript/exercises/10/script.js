var input = document.querySelectorAll('input')

document.querySelector('button').addEventListener('click', function(){

	if ( input[0].value != "" && input[1].value != "" ) {
		if (!isNaN(input[0].value) && !isNaN(input[1].value)) {
			alert('A soma é :' + (parseFloat(input[0].value) + parseFloat(input[1].value)))
		} else {
			alert('Campos inválidos para soma')
		}
	} else {
		alert('Preencha todos os campos')
	}

	
})