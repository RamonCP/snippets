var input = document.querySelector('input')
var lista = []

$('.confirmar').addEventListener('click', function(){
	if ( input.value != "" ) {
		lista.push(input.value)
		console.log(lista)
	} else {
		alert('Preencha o campo')
	}
})

$('.exibir').addEventListener('click', function(){
	var ul = document.createElement('ul')
	for ( i = 0; i < lista.length; i++ ) {
		var li = document.createElement('li')
		li.append(lista[i])
		ul.append(li)
	}

	document.querySelector('body').append(ul)
})

function $(elemento){
	return document.querySelector(elemento)
}