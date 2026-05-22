const inputPesquisa = document.getElementById('pesquisa');
const mensagem = document.getElementById('mensagem');
const botaoBuscar = document.getElementById('buscar');
const lista = document.getElementById('listaProdutos');
const produtos = true;
window.addEventListener("load", function(){
        fetch('https://fakestoreapi.com/products')
    .then(response => response.json())
    .then(data => {

        for(let i = 0; i<data.length; i++){

        

    //criar div com JS
    const card = document.createElement("div");
    card.classList.add("card");// add a classe do CSS na div

    const img = document.createElement("img");
    img.src = data[i].image;

    const info = document.createElement("div");
    card.classList.add("info");

    //cria a DIV com os textos informativos do produto H2 e P
    const titulo = document.createElement("h2");
    titulo.textContent = data[i].title;
    const preco = document.createElement("p");
    preco.innerHTML = "<strong>Preço: </strong> R$ 999, 90" +data[i].price;
    const categoria = document.createElement("p");
    categoria.innerHTML = "<strong>Categoria: </strong> Tecnologia" + data[i].category;

    //add o nome (titulo), preço e categoria div produto na div "info "
    info.appendChild(titulo);
    info.appendChild(preco);
    info.appendChild(categoria);

    card.appendChild(info)
    info.classList.add("info")
    lista.appendChild(card);
    card.appendChild(img);
    }//fim do for
    })// fim do fetch
})

//EVENTOS DO BOTÃO BUSCAR
botaoBuscar.addEventListener("click", buscar);
function buscar (){
    if(inputPesquisa.value === ""){
    mensagem.innerHTML = "Preencha todos os campos!";
}
else if (produtos){
    mensagem.innerHTML = "Produtos encontrados";

}
else{
    mensagem.innerHTML = "Nenhum produto encontrado!"
}
}

botaoBuscar.addEventListener("click", filtrar);
function filtrar(){
    
}


botaoBuscar.addEventListener("mouseover", sobre);

function sobre(){
    botaoBuscar.style.backgroundColor = "blue";
}

botaoBuscar.addEventListener("mouseout", function()
{
    botaoBuscar.style.backgroundColor = "orangered";
});

botaoBuscar.addEventListener("mousedown", function()
{
    botaoBuscar.style.backgroundColor = "red";
});