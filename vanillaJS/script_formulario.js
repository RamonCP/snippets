function checkNull(dado, id, msg) {

    if (dado == "") {

        // document.getElementById(id).value = "Preencha o campo.";
        alert(msg +" "+ id);
        return false;
    }
    return true;
}

function enviar() {
        
    var data = [];
    data.push(document.getElementById("nome").value,document.getElementById("tipoLog").value,document.getElementById("endereco").value,
    document.getElementById("numero").value,document.getElementById("bairro").value,
    document.getElementById("cidade").value,document.getElementById("state").value,
    document.getElementById("premio").value);
    
    var list = [];
    list.push("nome","tipoLog","endereco","numero","bairro","cidade","state","premio");
        
    for(x =0; x < data.length; x++){
        if( !checkNull(data[x],list[x], "Prenchimento obrigatorio")){
            return 0;
        }           
    }
       
    if(data[7].length == 6){
        alert(list[0]+" tem o 6 caracteres");
        for(i=0; i<data[7].length; i++){
           var caracter = data[7][0] + data[7][1];
           var last_caracter = data[7][4]+ data[7][5]; 
        }    
        if(caracter == last_caracter){
            alert("Os primeiros 2 caracteres são iguais aos ultimos");
        }else{
            alert("Não são iguais");
        }
    }
}