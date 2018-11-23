$(document).ready(function(){
	var loading = false;

	// $(document).on("scroll",function(){
	//     if(loading == false){
	//         if(isOnScreen($("img"))){
	//         	loading = true;
	//             $.ajax({
	// 			    url: "index.html",
	// 			    method: "GET"
	// 			}).done(function(res){
	// 			    $("img").append(res);
	// 			    console.log(loading)
	// 			});
	// 	    }
	// 	}
	// });


	// function isOnScreen(element){
 //        var win = $(window);
 //        var screenTop = win.scrollTop();
 //        var screenBottom = screenTop + win.height();
 
 //        var elementTop = element.offset().top;
 //        var elementBottom = elementTop + element.height();
 
 //        return elementBottom > screenTop && elementTop < screenBottom;        
	// }

	// $(document).on("scroll", function(){
	// 	var img = $('img');
	// 	var src = img.data('src');
	// 	if($(window).scrollTop() >= $('#koala').offset()) { 
	// 		$('img').attr('src', src)
	// 	}	
	// 	console.log(img)
		
	// })

	$('img').lazy();

	

})