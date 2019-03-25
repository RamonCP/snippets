$(function(){
    
    $('p.tooltip').meuPlugin({
        estilo: {
            color:'#ff0000',
            'font-size': '40px'
        },
        text: 'Parágrafo criado a partir do meu plugin',
    });

    $('h1.tooltip').meuPlugin({
        estilo: {
            color: '#007eff',
            'font-size': '30px'
        },       
        text: 'h1 dinâmico vindo do plugin :D',
        statusClass:'desativado'
    })

    $('h2').meuPlugin({
        text: 'h2 no centro',
        statusClass : 'center'
    })
})