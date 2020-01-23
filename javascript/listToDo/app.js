var lista = document.getElementById('app')
var button = document.querySelector('button')
var campoTexto = document.querySelector('input')

var itemDefault = JSON.parse(localStorage.getItem('lista_tarefas'))  || [ 'Fazer Café', 'Estudar JavaScript', 'Estudar Inglês' ]

function renderLista() {
    lista.innerHTML = ''

    for ( item of itemDefault ) {
        var posicaoDoItemNaLista = itemDefault.indexOf(item)

        var li_Element = document.createElement('li')
        var li_ElementText = document.createTextNode(item) 

        var linkExcluir = document.createElement('a')
        linkExcluir.setAttribute('href','#!')
        linkExcluir.setAttribute('onclick', 'deletarItemLista('+ posicaoDoItemNaLista +')')

        var linkExcluirText = document.createTextNode('Excluir')

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
    salvaNoLocalStorage()
}

function deletarItemLista(posicaoDoItemNaLista) {
    itemDefault.splice(posicaoDoItemNaLista, 1)
    renderLista()
    salvaNoLocalStorage()
}

function salvaNoLocalStorage() {
    localStorage.setItem('lista_tarefas', JSON.stringify(itemDefault))
}

renderLista()
button.onclick = addItemLista