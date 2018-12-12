one('form').addEventListener('submit', function(e){
	e.preventDefault()

	var result = inputVazio(all('input'))

	if (result.length == 0) {		
		if(validateEmail(one('#email').value)) {

		} else {
			var msg = one('#email').parentElement.querySelector('.msg')
			msg.innerHTML = "Email inválido" 
			msg.classList.add('active')
		}
	} else {
		
	}

})


function inputPress() {
	var msg = all('.msg').length;
	for (i = 0; i < msg; i++) {
		all('.msg')[i].classList.remove('active')
	}
}

function inputVazio(elemento) {
	var list = []
	for ( x = 0; x < elemento.length; x++ ) {
		if ( elemento[x].value == "") {
			list.push(elemento[x])
			// var input = elemento[x]
			var input_div = elemento[x].parentElement
			input_div.querySelector('.msg').classList.add('active')
			console.log(input_div.querySelector('.msg'))
		}
	}
	return list
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function one(elemento) {
	return document.querySelector(elemento)
}

function all(elemento) {
	return document.querySelectorAll(elemento)
}