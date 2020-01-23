var btn = document.querySelector('button'),
	input = document.querySelector('input')

btn.addEventListener('click', function(){
	if ( input.value != "" ) {
		alert(pontuacao(input))
	} else {
		alert('Preencha o campo')
	}
})

function pontuacao(elemento) {
	var cpf = '';
	for ( x = 0; x < elemento.value.length; x++ ) {

		if ( x == 2 || x == 5 ) {
			cpf += elemento.value[x] + '.';
		} else if ( x == 8 ) {
			cpf += elemento.value[x] + '-';
		} else {
			cpf += elemento.value[x]
		}

		// cpf += elemento.value[x]		
	}

	return cpf
}