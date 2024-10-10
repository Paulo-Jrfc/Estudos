
let timessp = JSON.parse(sessionStorage.timessp)
console.log(timessp)

let time = timessp[sessionStorage.posicao - 1];
//Imagem

let escudoElement = document.querySelector("#imgc");
if (escudoElement) {
    // Verifica se 'time' está definido e se possui a propriedade 'escudo'
    if (typeof time !== 'undefined' && time.escudo) {
        // Define o atributo 'src' da imagem
        escudoElement.src = time.escudo;
    } else {
        console.error("Propriedade 'time.escudo' não encontrada.");
    }
} else {
    console.error("Elemento com ID 'imgc' não encontrado.");
}

//Nome
let nomeTime = document.querySelector("#info-time");
nomeTime.textContent = time.nome;

//Cidade
let cidade = document.querySelector("#info-cidade");
cidade.textContent = time.cidade;

//Estadio
let estadioElement = document.querySelector("#info-estadio");
estadioElement.textContent = time.estadio;

//Titulo
let titulosElement = document.querySelector("#info-titulos");
titulosElement.textContent = time.titulos;

//Ano de Criação
let criacaoElement = document.querySelector("#info-criacao");
criacaoElement.textContent = time.ano_criacao;

//Rival
let rivalElement = document.querySelector("#info-rival");
rivalElement.textContent = time.rival;