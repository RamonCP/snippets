var img = document.querySelector('img')

img.addEventListener('mouseover', function(){
	console.log('acessa')
	img.src ='https://github.com/gabrieldarezzo/helpjs-ravi/blob/master/images/lampada-on.jpg?raw=true'
})

img.addEventListener('mouseout', function(){
	console.log('apagada')
	img.src ='https://github.com/gabrieldarezzo/helpjs-ravi/blob/master/images/lampada.jpg?raw=true'
})