var input = document.querySelectorAll('input')

document.querySelector('button').addEventListener('click', function(){
	if ( input[0].value != "" && input[1].value != "" ) {
		if ( !isNaN(input[0].value) && !isNaN(input[1].value) ) {
			alert(soma(input[0].value, input[1].value))
		} else {
			alert("Campos inválidos para a soma")
		}
	} else {
		alert("Preencha todos os campos")
	}
})

function soma(v1,v2) {
	return parseFloat(v1) + parseFloat(v2)
}