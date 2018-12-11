var img = document.querySelector('img')

img.addEventListener('click', function(){

	if(img.classList.contains('acessa')) {
		img.src = 'https://github.com/gabrieldarezzo/helpjs-ravi/blob/master/images/lampada.jpg?raw=true'
		img.classList.remove('acessa')
	} else {
		img.classList.add('acessa')
		img.src = 'https://github.com/gabrieldarezzo/helpjs-ravi/blob/master/images/lampada-on.jpg?raw=true'
	}
})

