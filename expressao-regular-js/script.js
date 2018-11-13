$(document).ready(function(){

/*
	\d = numeros de (0-9);
	? = Um caracter pode vir aparecer ou não. Exemplo: \d\d\d\d\d-?\d\d\d
	\w = pega todos letras, numeor e underline
	\W = pega tudo que não for letras, numeros e underlines
	\s = Pega todos os espaços em branco
	\S = Pega tudo que não for espaço em branco
	[] = define o que pode ou não ser expresso . Exemplo: [0-3] . Caracteres de 0 a 3 (0,1,2,3)
	. = Qualquer caracter (espcaço, @, # a, 0,;) 
	{4,} = Define um minimo de vezes que um elemento deve se ter. Exemplo: \d{8,}
	{3,16} = Define um minimo de vezes que um elemento deve se ter e um máximo. Exemplo: \d{4,10}
*/ 

//Primeiro caracter será de 0 a 3 e o segundo podera ser de [0-9]
var dia = '[0-3]?\d\/';

//Primeiro caracter será 0 ou 1 e o segundo podera ser de [0-9] 
var mes = '[0-1]?\d/';

//Primeiro caracter será 1 ou 2 e o restante poderá ser de [0-9]
var ano = '[12]\d{3}';

var data = dia+mes+ano;
// OU
// var data = '[0-3]?\d\/[0-1]?\d/[12]\d{3}';

var cep = '\d{5}\-?\d{3}';

//Pega todos os caracteres, incluindo os em branco, de um nome individualmente
var nome = '[a-zA-Z0-9\s]';

//Pega a string por completa, juntando todos os elementos formando um bloco inteiro 
nome = '[A-Za-z0-9\s]+';

//Para pegar nomes com acentuação , de acordo com a tabela unicode http://www.fileformat.info/info/unicode/block/latin_supplement/list.htm
nome = '[a-zA-Z\u00C0-\u00FF ]+';

console.log(data);
console.log(cep);


$('.input').keyup(function(){
	console.log($(this).val() + '-' + $(this).val().length)
	var tamanho = $(this).val().length;

	if(tamanho == 3){
		console.log('tamanho: '+tamanho)
	}

})	

})