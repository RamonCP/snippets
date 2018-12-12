

one('#telefone').addEventListener('keyup', function() {
	this.value = telefone(this.value)
})

one('#cpf').addEventListener('keyup', function(){
	this.value = cpf(this.value)
})

one('#rg').addEventListener('keyup', function(){
	this.value = rg(this.value)
})

one('#cep').addEventListener('keyup', function(){
	this.value = cep(this.value)
})


function cep(valor) {

}

function rg(valor) {
	valor = valor.replace(/\D/g,'')
	valor = valor.replace(/(\d{2})(\d{3})/,"$1.$2.")
	valor = valor.replace(/(\d{3})(\d{2})/,"$1-$2")
	return valor
}


function cpf(valor) {
	valor = valor.replace(/\D/g,'')
	valor = valor.replace(/(\d{3})(\d)/,'$1.$2')
	valor = valor.replace(/(\d{3})(\d{2})$/,'.$1-$2')
	return valor
}


function telefone(valor) {
	valor = valor.replace(/\D/g,'')
	valor = valor.replace(/(\d{2})(\d)/,"($1) $2")
	valor = valor.replace(/(\d)(\d{4})$/,"$1-$2")
	return valor
}


function one(elemento) {
	return document.querySelector(elemento)
}

function all(elemento) {
	return document.querySelectorAll(elemento)
}

