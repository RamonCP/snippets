$(function(){
    
    $('p.tooltip').meuPlugin({
        'corDeFundo':'#ff0000',
        'text': 'Parágrafo criado a partir do meu plugin',
    });

    $('h1.tooltip').meuPlugin({
        'corDeFundo': '#007eff',
        'fontSize': '30px',
        'text': 'h1 dinâmico vindo do plugin :D',
        'statusClass':'desativado'
    })
})