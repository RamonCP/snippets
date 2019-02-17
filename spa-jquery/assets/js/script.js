$(function () {
    // $(window).on('hashchange', hashchanged);
    // hashchanged();

    $('#menu a').click(function(e){
    	e.preventDefault()
    	loadPage($(this).attr('href'))
    })

});


function loadPage(link) {
	$("#content").load(link);
}

function hashchanged() {
    var hash = location.hash.replace(/[#\/]/g, '') || 'index';
    $("#content").load(hash + '.php');
}