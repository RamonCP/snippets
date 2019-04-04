$(function(){
    function ajaxAPI(valor) {
        var marcasResponse = []
        $.ajax({
          type: 'GET',
          crossDomain: true,
          url: 'https://fipe.parallelum.com.br/api/v1/carros/'+valor,
          success: function(response) {
              
            for (i = 0; i <= response.length; i++) {
                marcasResponse[response[i].nome] = response[i].flag
            }
          }
        });
        return marcasResponse  
    }

    // function loadDadosTabelaController(dadosFipe, nomeFuncao) {
    //     if ( nomeFuncao == 'marcas' ) {
    //         getMarca(dadosFipe)
    //     }

    //     if ( nomeFuncao.indexOf('marcas') >= 0 && nomeFuncao.indexOf('modelos') >= 0 ) {
    //         getModelos(dadosFipe)
    //     }
       
    // }

    // function getMarca(marcas) {
    //     const marcasArray = {};
    //     for (var i = 0; i < marcas.length; i++) {
    //         marcasArray[marcas[i].nome] = marcas[i].flag;
    //     }
    //     $('#autocomplete-input').autocomplete({
    //         data: marcasArray
    //     });
    // }

    // function getCodMarca(marcas) {
    //     for (var i = 0; i < marcas.length; i++) {
    //         if ( marcas[i].nome == $('#autocomplete-input').val()) {
    //             $('#cod-marca').val(marcas[i].codigo) 
    //         }
    //     }
    // }

    // function getModelos(modelos) {
    //     const modelosResponse = modelos.modelos
    //     const modelosArray = {}
    //     for (var i = 0; i < modelosResponse.length; i++) {
    //         modelosArray[modelosResponse[i].nome] = modelosResponse[i].flag;
    //     }
    //     $('#autocomplete-input-modelo').autocomplete({
    //         data: modelosArray
    //     });

    //     getCodModelos(modelosResponse)
    //     console.log(modelosResponse)

    // }

    // function getCodModelos(modelosResponse) {
    //     for (var i = 0; i < modelosResponse.length; i++) {
    //         if ( modelosResponse[i].nome == $('#autocomplete-input-modelo').val()) {
    //             $('#cod-modelo').val(modelosResponse[i].codigo) 
    //         }
    //     }        
    // }

    // $('#autocomplete-input-modelo').on('click', function(){
    //     loadTabela('marcas/59/modelos')
    //     // console.log($('#cod-marca').val())
    // })

    // $('#autocomplete-input-modelo').on('focus', function(){
    //     loadTabela('marcas/')
    // })

    var ajax = ajaxAPI('marcas')

    for (i = 0; i <= ajax.length; i++) {
        console.log(ajax[i].nome)
    }

   ;

})