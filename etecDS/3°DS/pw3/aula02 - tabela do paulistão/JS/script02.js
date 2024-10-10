import times from "./times.js";
import {imagens} from "./imagens.js";
import {timessp} from "./timessp.js";

sessionStorage.timessp = JSON.stringify(timessp)
console.log(timessp)

let trs = document.querySelectorAll("tr")
console.log(trs)

trs.forEach(item =>{
    item.addEventListener('click', ()=>{
        let filho = item.children
        console.log(filho[0].textContent)
        sessionStorage.posicao = filho[0].textContent;
        document.location.href = "pg02.html"
    })
})

// var Times = [
//     new Time(1, imagens[0], "Santos", 19, 9, 6, 1, 6),
//     new Time(2, imagens[1], "Palmeiras", 18, 8, 5, 3, 6),
//     new Time(3, imagens[2], "Novorizontino", 15, 9, 4, 3, 3),
//     new Time(4, imagens[3], "Red Bull Bragantino", 15, 9, 4, 3, 6),
//     new Time(5, imagens[4], "São Bernardo", 15, 9, 4, 3, 2),
//     new Time(6, imagens[5], "São Paulo", 14, 8, 4, 2, 4),
//     new Time(7, imagens[6], "Água Santa", 14, 9, 4, 2, 0),
//     new Time(8, imagens[7], "Mirassol", 13, 9, 3, 4, 5),
//     new Time(9, imagens[8], "Inter de Limeira", 13, 8, 4, 1, 4),
//     new Time(10, imagens[9], "Ponte Preta", 13, 9, 3, 4, 4),
//     new Time(11, imagens[10], "Corinthians", 10, 9, 3, 1, 0),
//     new Time(12, imagens[11], "Botafogo", 10, 9, 2, 4, -8),
//     new Time(13, imagens[12], "Portuguesa", 7, 8, 2, 1, -5),
//     new Time(14, imagens[13], "Ituano", 5, 9, 1, 2, -1),
//     new Time(15, imagens[14], "Guarani", 4, 9, 1, 1, -5),
//     new Time(16, imagens[15], "Santo André", 4, 9, 0, 4, -9)
// ];
