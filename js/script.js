console.log("depurandoooooooooo...");

function exibir(){
    const nome = prompt('Digite seu nome');
    const media = prompt('Digite sua média em Web 1');

    document.write("Nome: " + nome);
    document.write("<br> Média: " + media);

    const nota = 10;
    const status = true
    
    //tipo de dados
    console.log(typeof nome);
    console.log(typeof media);
    console.log(typeof nota);
    console.log(typeof status);

    const resposta = confirm("Quer saber se foi aprovado?");

    if(resposta){
        alert("Se sua nota foi 6 ou mais, você foi Aprovado!");0
    }
    else{
        alert("Tchau..............");
    }

    console.log(typeof resposta)
}