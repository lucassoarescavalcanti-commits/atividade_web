function enviar(){
    const div = document.getElementById("resultado");

    const nome = document.getElementById("nome").value;

    const radio = document.getElementsByName("sexo");

    const checkbox = document.querySelectorAll("input[name='interesse']");

    const estado = document.getElementsByTagName('select')[0].value;

    let sexo = "";
    let interesses = [];
    //percorre todos os radios
    for(let i=0;i<radio.length;i++){
        //verifica quaç radio foi selecionado
        if(radio[i].checked){
            //recupera o valor do radio selecionado
            sexo = radio[i].value
        }
    }

    for(let i=0; i<checkbox.length;i++){
        if(checkbox[i].checked){
            //add os checkboxs selecionados no array
            interesses.push(checkbox[i].value);
        }
    }

    div.innerHTML = "Nome: " + nome + "<br>Sexo: " + sexo + "<br>Interesses: " + interesses.join(", ") + "<br>Estado: " + estado;
}