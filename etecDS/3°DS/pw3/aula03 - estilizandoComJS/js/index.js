
let trs = document.querySelectorAll('tr')

for (let index = 1; index < trs.length; index++) {
    calcularMedia(index)
}
function calcularMedia(index) {
    let nota01 = parseFloat(trs[index].children[2].textContent);
    let nota02 = parseFloat(trs[index].children[3].textContent);
    let nota03 = parseFloat(trs[index].children[4].textContent);
    let nota04 = parseFloat(trs[index].children[5].textContent);

    let media = (nota01 + nota02 + nota03 + nota04) / 4

    trs[index].children[6].textContent = media
    estilizar(trs[index])
}
function estilizar(tr) {
    let media = parseFloat(tr.children[6].textContent)
    if(media >= 9.0){
        tr.style.backgroundColor = "green"
    } else if (media >= 6.0){
        tr.style.backgroundColor = "gray"
    } else {
        tr.classList.add("reprovados")
    }
}
