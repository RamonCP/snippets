


function telefone(input){
	var value = keyup(input)

	console.log(value)
}


function keyup(input) {
	input.addEventListener('keyup', function(){
		return this.value	
	})
}

function one(elemento) {
	return document.querySelector(elemento)
}

function all(elemento) {
	return document.querySelectorAll(elemento)
}



var phone = one('#telefone')
telefone(phone)