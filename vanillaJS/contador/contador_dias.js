var form = document.querySelector('form'),
	input = document.querySelector('input')

form.addEventListener('submit', function(e) {
	e.preventDefault()
	if ( input.value != "" ) {
		console.log(date())
	} else {
		alert('input vazio')
	}
	console.log('ok')
})

function date() {
	var inicio = document.querySelector('input.inicio'),
		fim = document.querySelector('input.fim'),
		data_inicio = new Date(inicio.value),
		data_fim = new Date(fim.value)

	// data_inicio.setDate(data_inicio.getDate() + 1)
	// data_fim.setDate(data_fim.getDate() + 1)

	var day = data_inicio.getDay()
	var month = data_inicio.getMonth()
	var year = data_inicio.getFullYear()

	var day_fim = data_fim.getDay()
	var month_fim = data_fim.getMonth()
	var year_fim = data_fim.getFullYear()

	return day_fim
}