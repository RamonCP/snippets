$(function(){
    // $('#autocomplete-input').autocomplete({
    //     data: marcasArray
    // });

    var fipeDados = (function() {

        var fipeUrl = 'https://fipe.parallelum.com.br/api/v1/carros/'
        const fipe = {}
        fipe.queue = []
        fipe.marcas = []

        fipe.queue.push(fipeUrl)

        fipe.getMarcas = function () {
            return fipeUrl
        }

        fipe.getAllMarcas = function() {
            marcasResponse = ''
            $.ajax({
                type: 'GET',
                url: fipeUrl + 'marcas',
                success: function(response) {
                    marcasResponse = response
                    for ( i = 0; i <= marcasResponse.length; i++ ) {
                        fipe.marcas.push(marcasResponse[i])
                    }
                }
            })
            return marcasResponse
        }

        return fipe

    })($)

    function insereTodasMarcas() {
        fipeDados.getAllMarcas()
        // var todasMarcas = fipeDados.getAllMarcas()
        var todasMarcas = fipeDados.marcas
        var todasMarcasArray = ''
        for ( i = 0; i <= todasMarcas.length; i++) {
            console.log('sas')
        }
        // $('#autocomplete-input').autocomplete({
        //     data: todasMarcasArray
        // });


        console.log(fipeDados.marcas[0])
        console.log(todasMarcas)

    }
    

    insereTodasMarcas()
    // console.log(fipeDados.marcas)
})