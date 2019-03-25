(function($){

    $.fn.meuTooltip = function(options) {

        // Configuração default
        var defaults = {
            'corDeFundo':'yellow'
        }

        /*  Caso não exista options
            é atribuida para a variável settings
            o valor do defaults
        */
        var settings =  $.extend({}, defaults, options)

        // this é o objeto jQuery
        return this.each(function(){
            //Elemento a ser modificado
            $(this).css({'background': settings.corDeFundo })
        })
    }

})(jQuery)