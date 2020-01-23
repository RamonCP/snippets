var input = document.querySelectorAll('input')
document.querySelector('button').addEventListener('click', function(){
	if ( !isNaN(input[0].value) && !isNaN(input[1].value) || input[0].value == "" && input[1].value == "") {
		alert(soma(input[0].value, input[1].value))
	} else {
		alert("Número inválido para soma")
	}
})

function soma(v1,v2) {
	v1 = v1 == "" ? 0 : v1 
	v2 = v2 == "" ? 0 : v2 

	return parseFloat(v1) + parseFloat(v2)
}