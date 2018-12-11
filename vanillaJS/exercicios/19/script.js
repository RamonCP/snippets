window.addEventListener('load', function(){
	for ( i = 0; i <= 10; i++ ) {
		for ( x = 0; x <= 10; x++) {
			var span = document.createElement('span')
			var br = document.createElement('br')
			span.append(x + " x " + i + " = " + x*i)
			document.querySelector('body').append(span)
			document.querySelector('body').append(br)
		}
	}
})