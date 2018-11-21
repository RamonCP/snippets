$(document).ready(() => { 


	function carregaCardapio(){
		var div = "";
		$.getJSON('json/entradas.json', function(data) {
			$.each(data, function(key, value) {
				console.log(value.unidades);

				div += "<div class='product'>";
				div += "<div class='image'>";
				div += "<img src="+ value.imagem +">";
				div += "<h3 id='price'>R$ " + value.preco + "</h3>";
				div += "</div>";
				div += "<div class='info'>";
				div += "<h4 id='title'>" + value.nome + "</h4>";
				div += "<p id='description'>" + value.descricao + "</p>";
				div += "</div></div>";


				$('.content').html(div);
			});
		});
    }


    function carregaPizza(){
    	var div = "";
    	$.getJSON('json/pizzas.json', (data) => {
    		$.each(data, (key, value) => {
    			console.log(value.nome);
    		})
    	}) 
    }

 	carregaCardapio();
 	carregaPizza();

})