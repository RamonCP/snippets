$(document).ready(() => {

	$('.documentacao').on('click', () => {
		$.post('documentacao.html', data => {
			$('#pagina').html(data);
		})
	})

	$('.suporte').on('click', () => {
		$.post('suporte.html', data => {
			$('#pagina').html(data);
		})
	})


	$('#competencia').on('change', e => {
		// console.log($(e.target).val())

		$.ajax({
			type: 'GET',
			url: 'Dashboard_controller.php',
			data: { competencia: $(e.target).val() },
			dataType: 'json',
			success: response => {
				console.log(response);
				$('#nvendas').html(response.numero_vendas);
				$('#totvendas').html(response.total_vendas);
				$('#totdespesas').html(response.total_despesas);
				$('#totreclamacoes').html(response.reclamacoes);
				$('#totelogios').html(response.elogios);
				$('#totsugestoes').html(response.sugestoes);
			}
		})
	})

})