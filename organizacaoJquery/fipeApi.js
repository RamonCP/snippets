var fipeApi2 = (function(){

    var fipeUrl = 'https://fipe.parallelum.com.br/api/v1/carros/'

    var fipeDados = {}
    fipeDados.queue = []

    fipeDados.getAllMarcas = function() {
        fipeUrl += 'marcas'
        fipeDados.queue.push(fipeUrl)

        var marcasResponse = '';

        $.ajax({
            type: 'GET',
            crossDomain: true,
            url: fipeUrl,
            success: function(response) {
              marcasResponse = response
            }
        })

        return marcasResponse
    }

    // fipeDados.getMarcas = function(codMarca) {
    //     fipeUrl += 'marcas/'+codMarca
    //     fipeDados.queue.push(fipeUrl)
    // }

    return fipeDados

})()