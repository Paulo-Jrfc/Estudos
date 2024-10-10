// AppendChild -> incluir como filho
let body = document.querySelector('body');

// Definindo as imagens e descrições dos produtos
let imagens = [
    '/imagens/chocolate_branco.jpg',
    '/imagens/galak.jpg',
    '/imagens/cacaushow.png',
    '/imagens/download.jpg',
    '/imagens/milka.jpeg',
    '/imagens/alpino.png',
    '/imagens/mm.jpg',
    '/imagens/lolla.jpg',
    '/imagens/hersheys.png',
    '/imagens/galak.jpg'
];

let descricao = [
    ['Chocolate Branco', 'Chocolate branco da marca Nestlé', 'R$7,99'],
    ['Galak', 'Chocolate ao leite da marca Lacta', 'R$5,49'],
    ['Cacau Show', 'Chocolate meio amargo da marca Cacau Show', 'R$8,99'],
    ['Chocolate ao Leite', 'Chocolate ao leite da marca Garoto', 'R$6,49'],
    ['Milka', 'Chocolate ao leite da marca Milka', 'R$9,99'],
    ['Alpino', 'Chocolate ao leite da marca Alpino', 'R$7,49'],
    ['M&M', 'Chocolate recheado da marca M&M', 'R$3,99'],
    ['Lolla', 'Chocolate recheado da marca Lolla', 'R$10,49'],
    ['Hershey\'s', 'Chocolate ao leite da marca Hershey\'s', 'R$6,99']
];

// Criando os produtos dinamicamente com base nas imagens e descrições
for (let i = 0; i < 10; i++) {
    let produto = document.createElement('div');
    produto.innerHTML = `
        <div class="div_img">
            <img src="${imagens[i]}" alt="Chocolate">
        </div>
        <h3>${descricao[i][0]}</h3>
        <p>${descricao[i][1]}</p>
        <p>${descricao[i][2]}</p>
    `;
    produto.classList.add('produto');
    body.appendChild(produto);
}

console.log(document.querySelectorAll('.produto')[2].querySelector('.div_img').querySelector('img'));
