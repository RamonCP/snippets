$(function(){ 
	carregaCardapio("entradas");

	// Functions
	function carregaCardapio(arquivo){
		var div = "";
		$.getJSON('json/'+ arquivo +'.json', function(data) {
			$.each(data, function(key, value) {
				div += "<div class='product'>";
				div += "<div class='image'>";
				div += "<img src="+ value.imagem +">";
				div += "<h3 id='price' class='mt-4 text-center' data-value="+ value.valor +">R$ " + value.preco + "</h3>";
				div += "</div>";
				div += "<div class='info'>";
				div += "<h4 id='title'>" + value.nome + "</h4>";
				div += "<p id='description'>" + value.descricao + "</p>";
				div += "<button type='button' id='add' class='btn btn-warning text-uppercase font-weight-bold py-2 px-5'>Adicionar ao carrinho</button>";
				div += "</div></div>";

				$('.content').html(div);
			});
		});
    }

    function addCheckout(valor){
    	// var price_old = parseFloat($('.price a').data('price'));
    	// $('.price a').attr('data-price',price_old + valor)

    	var total = parseFloat($('.price a').data('price')).trigger('refresh') + valor;

    	// $('.price a').html("R$ "+ total); 
    	console.log(parseFloat(total))

    }




    // Events
    $('.list ul li a').click(function(){
    	var link = $(this).data("link");
    	$('.list ul li a').removeClass('active');
    	$(this).addClass('active');
    	carregaCardapio(link);
    });

    // on para capturar o evento de um elemento que não foi carregado com o dom
    $('.content').on("click", "button", function(){
    	var price = $(this).parents('.info').siblings('.image').find('h3').data('value')
    	// console.log(price)
    	addCheckout(price)
    });


 	
})