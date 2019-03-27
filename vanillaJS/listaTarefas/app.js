var lista = document.getElementById('app')
var button = document.querySelector('button')
var campoTexto = document.querySelector('input')

var itemDefault = [ 'Fazer Café', 'Estudar JavaScript', 'Estudar Inglês' ]

function renderLista() {
    lista.innerHTML = ''

    for ( item of itemDefault ) {
        var li_Element = document.createElement('li')
        var li_ElementText = document.createTextNode(item) 

        var linkExcluir = document.createElement('a')
        var linkExcluirText = document.createTextNode('Excluir')

        linkExcluir.href = '#!'
        linkExcluir.appendChild(linkExcluirText)

        li_Element.appendChild(li_ElementText)
        li_Element.appendChild(linkExcluir)

        lista.appendChild(li_Element)
    }
}

function addItemLista() {
    itemDefault.push(campoTexto.value)
    campoTexto.value = ''
    renderLista()
}

function excluiItemLista() {
    console.log('ok')
}

renderLista()
button.onclick = addItemLista
document.querySelectorAll('#app li a').onclick = excluiItemLista