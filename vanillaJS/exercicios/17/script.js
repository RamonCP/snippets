var number = parseFloat(prompt("Digite um número"))

if ( isNaN(number) ){
	alert("Valor inválido para a resolução") 
} else {
	if ( number%2 == 0 ) {
		alert("O número "+ number + " é par")
	} else {
		alert("O número "+number+" é ímpar")
	}
}
