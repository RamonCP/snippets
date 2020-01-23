var btn = document.querySelector('button'),
    input = document.querySelector('input')

btn.addEventListener('click', function(){
	if ( input.value != "" ) {
		alert(remove(input))
	} else {
		alert('Preencha o campo')
	}
})

function remove(elemento) {
	var valor = ''
	for ( x = 0; x < elemento.value.length; x++ ) {
		valor += elemento.value[x].replace('.','').replace('-','')
	}
	return valor
}