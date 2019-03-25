(function($){


    $.fn.meuTooltip = function(options) {

        var defaults = {
            'corDeFundo':'yellow'
        }

        var settings =  $.extend({}, defaults, options)

        return this.each(function(){
            $(this).css({'background': settings.corDeFundo })
        })
    }

})(jQuery)