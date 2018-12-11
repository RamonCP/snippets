for ( i = 0; i < 20; i++ ) {
	if ( i % 2 == 0 ) {
		var span = document.createElement('span')
		var br = document.createElement('br')
		span.append(i)
		document.querySelector('body').appendChild(span)
		document.querySelector('body').appendChild(br)
	}
}
