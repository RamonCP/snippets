(function($){

    $.fn.meuPlugin = function(options) {

        // Configuração default
        var defaults = {
            estilo: {
                color:'yellow',
                'font-size': '60px'
            },          
            text: 'Olá mundo',
            statusClass: 'active'
        }

        /*  Caso não exista options
            é atribuida para a variável settings
            o valor do defaults
            $.extend mescla os valores
        */
        var settings =  $.extend({}, defaults, options)

        // this é o objeto jQuery
        return this.each(function(){
            //Elemento a ser modificado
            $(this)
            .css(settings.estilo)
            .html(settings.text)
            .addClass(settings.statusClass)
        })
    }

})(jQuery)