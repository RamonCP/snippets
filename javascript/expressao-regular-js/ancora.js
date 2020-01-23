$(document).ready(() => {

/*
	Tipos:
		Inicio e fim: {
			Define um inicio e o fim de como deve ser a expressão . Se inicia com ^ e termina com $
			Exemplo: ^(minhaexpressao)$
		}
		word boundary: {
			Busca na expressão o que nem começa e que nem termina na expressão. Se inicia \b e termina \b
			Exemplo: \ba{3}\b 
		}
		inverso: {
			Exatamente o inverso da word boundary. Inicia \B e termina \B
			Exemplo: \Ba{3}\B
		}	

*/


	function inicioFim (str) {
		const dia = '^[0-3]\\d\\/';
		const mes = '[01]\\d\\/';
		const ano = '[12][0129]\\d{2}$';
		const data = new RegExp(dia+mes+ano,'g');

		// reg = /[03]?\d\/[01]?\d\/[12]?\d{3}/;
		if(data.test(str)) {
			console.log(str + ' is valid');
		} else {
			console.log(str + ' is invalid');
		}
	}	
	

	function wordBoundary (str) {
		const reg = new RegExp(/\ba{3}\b/, 'g');
		if(reg.test(str)) {
			console.log('Word boundary: ' + str + ' is valid');
		} else {
			console.log('Word boundary: ' + str + ' is invalid');
		}
	}


	function inverso (str) {
		const reg = new RegExp(/\Ba{3}\b/, 'g');
		if(reg.test(str)) {
			console.log(str + ' is valid');
		} else {
			console.log(str + ' is invalid');
		}
	}

	function validEmail (email) {
		const reg = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/, 'g');
		if(reg.test(email)) {
			console.log(email + ' email is valid');
		} else {
			console.log(email + ' email is invalid');
		}
	}

	inicioFim('05/04/2000');
	wordBoundary('aaa');
	inverso('aaaa aaaa aaaa ');
	validEmail('ramo,n%@techd.com.br');
})
