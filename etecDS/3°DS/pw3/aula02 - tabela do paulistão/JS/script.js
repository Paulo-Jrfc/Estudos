var rows = document.getElementsByTagName("table")[0].rows;
for (let i = 1; i <= (rows.length - 1); i++) {
    let row = rows[i];
    let pontuacao = row.cells[3];
    let vitorias = row.cells[5];
    let empates = row.cells[6];
    let pontuacaoFinal = (vitorias.textContent * 3) + parseInt(empates.textContent);
    pontuacao.innerHTML = pontuacaoFinal;
}