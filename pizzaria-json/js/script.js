$(function(){ 
	carregaCardapio("entradas");

	// Functions
	function carregaCardapio(arquivo){
		let div = "";
		$.getJSON('json/'+ arquivo +'.json', function(data) {
			$.each(data, function(key, value) {
				div += "<div class='product'>";
				div += "<div class='image'>";
				div += "<img src="+ value.imagem +">";
				div += "<h3 id='price' class='mt-4 text-center' data-value="+ value.valor +">R$ " + value.valor.replace('.', ',') + "</h3>";
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

    function addCheckout(valor, valor_old, count){    
    	let total = parseFloat(valor_old) + parseFloat(valor);
    	let count_tot = parseInt(count) + 1;

    	$('.price a').data('price', parseFloat(total).toFixed(2));
    	$('.price a span.count').data('value', parseInt(count) + 1);

    	$('.price a span.count').html(count_tot)
    	$('.price a span.price').html("R$ "+ parseFloat(total).toFixed(2).replace('.', ',')); 
    }

    $('form').submit(function(e){
    	e.preventDefault();
    	let tab1 = $('#tab1');
    	let tab2 = $('#tab2');
    	let tab3 = $('#tab3');

    	console.log(tab1, tab2, tab3)
    })




    // =================== Events ======================= //
    $('.list ul li a').click(function(){
    	let link = $(this).data("link");
    	$('.list ul li a').removeClass('active');
    	$(this).addClass('active');
     	carregaCardapio(link);
    });

    // on para capturar o evento de um elemento que não foi carregado com o dom
    $('.content').on("click", "button", function(){
    	let cont = 0;
    	let price = $(this).parents('.info').siblings('.image').find('h3').data('value');
 
    	addCheckout(price, $('.price a').data('price'), $('.price a span.count').data('value'));
    });

    $('header a').on("click", function(){
    	let link = $(this).data('src');
    	$.post(link+".html", function(data){
    		$('.content').html(data);
    	})
    })


 	
})