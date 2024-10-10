// Desafio 01 - Selecionar os 3 primiros alunos da tabela com o seu nome e media:
    //Inclçuir ukm estilo de fundo amarelo, com borda tracejada e mensagem de agradecimento.
let trs02 = document.querySelectorAll('.t2 tr')

for (let index = 1; index <= 3; index++) {
    let nome = trs[index].children[1].textContent;
    let media = trs[index].children[6].textContent;
    let agradecimento = 'Muito obrigado por sua participação!'


    let local = 0
    
   
    trs02[index].children[local].textContent = nome
    local++
    trs02[index].children[local].textContent = media
    local++
    trs02[index].children[local].textContent = agradecimento
    estilizar01(trs02[index])
    
}

function estilizar01(tr) {
    tr.classList.add("desafio01")
}

//Desafio 03 - Calcular a média das atividades.
    //Incluir um estilo que entenda a seguinte regra?: 
    //Se maior ou igual a 9. cor amarela
    //Se maior ou igual a 6 cor cinza
    //Se menor que 6 cor vermelha

    let trs04 = document.querySelectorAll('.t4 tr')
    let somaNota01 = 0.0
    let somaNota02 = 0.0
    let somaNota03 = 0.0
    let somaNota04 = 0.0
    
    for (let j = 1; j <= 10; j++) {
        let nota01Text = trs[j].children[2].textContent.trim(); // Remover espaços em branco
        let nota01 = parseFloat(nota01Text); // Converter para número
        somaNota01 += nota01;
    
        let nota02Text = trs[j].children[3].textContent.trim(); // Remover espaços em branco
        let nota02 = parseFloat(nota02Text); // Converter para número
        somaNota02 += nota02;
    
        let nota03Text = trs[j].children[4].textContent.trim(); // Remover espaços em branco
        let nota03 = parseFloat(nota03Text); // Converter para número
        somaNota03 += nota03;
    
        let nota04Text = trs[j].children[5].textContent.trim(); // Remover espaços em branco
        let nota04 = parseFloat(nota04Text); // Converter para número
        somaNota04 += nota04;
        
    }
    
    trs04[1].children[0].textContent = (somaNota01 / 10);
    estilizarNota01(trs04[1].children[0])
    
    trs04[1].children[1].textContent = (somaNota02 / 10);
    estilizarNota02(trs04[1].children[1])
    
    trs04[1].children[2].textContent = (somaNota03 / 10);
    estilizarNota03(trs04[1].children[2])
    
    trs04[1].children[3].textContent = (somaNota04 / 10);
    estilizarNota04(trs04[1].children[3])

    function estilizarNota01(tr) {
        if(somaNota01 / 10 >= 9.0){
            tr.style.backgroundColor = "green"
        } else if (somaNota01 / 10  >= 6.0){
            tr.style.backgroundColor = "gray"
        } else {
            tr.classList.add("reprovados")
        }
    }
    function estilizarNota02(tr) {
        if(somaNota02 / 10 >= 9.0){
            tr.style.backgroundColor = "green"
        } else if (somaNota02 / 10  >= 6.0){
            tr.style.backgroundColor = "gray"
        } else {
            tr.classList.add("reprovados")
        }
    }
    function estilizarNota03(tr) {
        if(somaNota03 / 10 >= 9.0){
            tr.style.backgroundColor = "green"
        } else if (somaNota03 / 10  >= 6.0){
            tr.style.backgroundColor = "gray"
        } else {
            tr.classList.add("reprovados")
        }
    }
    function estilizarNota04(tr) {
        if(somaNota04 / 10 >= 9.0){
            tr.style.backgroundColor = "green"
        } else if (somaNota04 / 10  >= 6.0){
            tr.style.backgroundColor = "gray"
        } else {
            tr.classList.add("reprovados")
        }
    }

//Desafio 02 - Selecionar os 3 ultimos alunos com seu nome e notas das atividades, além da sua média:
    //Incluir um estilo que contenha uma cor de fundo vermelha borda preta, pontas arredondadas, fonte de tamanho de 10px

let trs03 = document.querySelectorAll('.t3 tr')

let i = 1

for (let index = 8; index <= 11; index++) {
    let nome = trs[index].children[1].textContent;
    let nota01 = parseFloat(trs[index].children[2].textContent);
    let nota02 = parseFloat(trs[index].children[3].textContent);
    let nota03 = parseFloat(trs[index].children[4].textContent);
    let nota04 = parseFloat(trs[index].children[5].textContent);
    let media = parseFloat(trs[index].children[6].textContent);
    let coisa = 0


    trs03[i].children[coisa].textContent = nome
    coisa++

    trs03[i].children[coisa].textContent = nota01
    coisa++

    trs03[i].children[coisa].textContent = nota02
    coisa++

    trs03[i].children[coisa].textContent = nota03
    coisa++

    trs03[i].children[coisa].textContent = nota04
    coisa++

    trs03[i].children[coisa].textContent = media

    estilizar02(trs03[i])  
    i++
}

function estilizar02(tr) {
    tr.classList.add("desafio02")
}


