$(document).ready(function(){ 


	function carregaCardapio(){
		$.getJSON('json/pizzas.json', function(data) {
			$.each(data, function(key, value) {
				console.log(value.unidades);
			});
		});
    }

 //    $(window).load( function(){
 //    	console.log('ok')
 //    })

 	carregaCardapio();
console.log('ok')

})