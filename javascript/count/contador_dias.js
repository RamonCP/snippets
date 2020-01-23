var form = document.querySelector('form'),
	input = document.querySelector('input')

form.addEventListener('submit', function(e) {
	e.preventDefault()
	if ( input.value != "" ) {
		setInterval(date, 1000)
	} else {
		alert('input vazio')
	}
	console.log('ok')
})

function date() {
	var fim = new Date(document.querySelector('input').value).getTime()

	var hoje = new Date().getTime()

	var diferenca = fim - hoje

	var dias = Math.floor(diferenca / (1000 * 3600 * 24));
	var horas = Math.floor((diferenca % (1000 * 3600 * 24)) / (1000 * 3600));
	var segundos = Math.floor((diferenca % (1000 * 60)) / 1000) 


	document.querySelector('.hours').innerHTML = dias+' dias '+horas+' horas '+segundos+' segundos'

}