document.querySelector('.contato').addEventListener('click', function(e){
	e.preventDefault()
	// while () {
	var interval = setInterval(scroll, 10)
	// }
	console.log('ok')
})

function scroll() {
	var offset = document.querySelector('#contato').offsetTop;
	if ((offset - document.documentElement.scrollTop) > 0) {
        document.documentElement.scrollTop += 50
    }
    else if ((offset - document.documentElement.scrollTop) < 0) {
        document.documentElement.scrollTop -= 50
    }
    else {
        clearInterval(interval)
    }
}