(function($){

    $.fn.meuPlugin = function(options) {

        // Configuração default
        var defaults = {
            'corDeFundo':'yellow',
            'fontSize': '40px',
            'text': 'Olá mundo',
            'statusClass': 'active'
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
            .css({
                'color': settings.corDeFundo,
                'font-size': settings.fontSize
            })
            .html(settings.text)
            .addClass(settings.statusClass)
        })
    }

})(jQuery)