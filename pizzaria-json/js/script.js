$(function(){ 

	// Functions
	let carregaCardapio = function (arquivo) {
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

    let addCheckout = function (valor, valor_old, count) {    
    	let total = parseFloat(valor_old) + parseFloat(valor);
    	let count_tot = parseInt(count) + 1;

    	$('.price a').data('price', parseFloat(total).toFixed(2));
    	$('.price a span.count').data('value', parseInt(count) + 1);

    	$('.price a span.count').html(count_tot)
    	$('.price a span.price').html("R$ "+ parseFloat(total).toFixed(2).replace('.', ',')); 
    }


    let validaInput = function (elemento) {
       	var cont = 0;
    	$.each($(elemento), function(key, value){
    		if ($(this).val() == "") { 
    			// console.log(key, value.name, $(this).parents('.form-group').find('.msg'))
    			$(this).parents('.form-group').find('.msg').addClass('active')
    			cont++;
    		}
    	})

    	if (cont > 0) {    		
    		return false;
    	} else {    
    		return true;
    	}
    }




    // =================== Events ======================= //
    $('.list ul li a').click(function() {
    	let link = $(this).data("link");
    	$('.list ul li a').removeClass('active');
    	$(this).addClass('active');
     	carregaCardapio(link);
    });

    // on para capturar o evento de um elemento que não foi carregado com o dom
    $('.content').on("click", "button", function() {
    	let cont = 0;
    	let price = $(this).parents('.info').siblings('.image').find('h3').data('value');
 
    	addCheckout(price, $('.price a').data('price'), $('.price a span.count').data('value'));
    });

    $('header a').on("click", function() {
    	let link = $(this).data('src');
    	$.post(link+".html", function(data){
    		$('.content').html(data);
    	})
    })


  	$('.content').on("click", "#tab1 button", function(e) {
		e.preventDefault();
		if(validaInput("#tab1 input")) {
			$("#tab2").addClass("show").addClass('active');
			$("#tab1").removeClass("show").addClass('disabled');
		}
	})	

	$('.content').on("click", "#tab2 button", function(e) {
		e.preventDefault();
		if(validaInput("#tab2 input")) {
			$("#tab3").addClass("show").addClass('active');
			$("#tab2").removeClass("show").removeClass('active');
		}
	})	

	$('.content').on("click", "#tab3 button", function(e) {
		e.preventDefault();
		if(validaInput("#tab3 input")) {
			console.log($('form').serialize())
		}
	})	

	$('.content').on("keyup", "input", function(){
		$(this).parents('.form-group').find('.msg').removeClass('active')
	})

	$('.content').on("blur", "#cep", function(){

		$.get('https://viacep.com.br/ws/'+$(this).val()+'/json/', function(data){
			$('#rua').val(data.logradouro)
			$('#numero').val(data.complemento)
			$('#cidade').val(data.localidade)
			$('#bairro').val(data.bairro)
			$('#estado').val(data.uf)
		})

	})

		
  	// Call Functions
	carregaCardapio("entradas"); 	
})