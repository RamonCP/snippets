function criaLista(){
	var lista = []
	for ( i = 0; i < 11; i++) {
		lista.push(Math.floor(10 * Math.random()))
	}
	console.log(lista)

	return lista
}

function decrescente() {
	var lista = criaLista()
	var decrescente = []

	for ( i = 10; i >= 0; i-- ) {
		decrescente.push(lista[i])
		// console.log(lista[i])
	}
		console.log(decrescente)

	// return decrescente
}


// console.log(criaLista())
// console.log(decrescente())

// criaLista()
decrescente()
