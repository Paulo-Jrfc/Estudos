
import {calcularImposto} from "./calculoImposto"


let inputNome = document.querySelector('#nome')
let inputSobrenome = document.querySelector('#sobrenome')
let inputIdade = document.querySelector('#idade')
let inputCpf = document.querySelector('#cpf')
// let inputRenda = document.querySelector('#renda')
let inputRenda = document.getElementById('renda')
let btn = document.getElementById('btn')

btn.addEventListener('click', pegarDados)

function pegarDados (event){
    
    event.preventDefault()
    let nome = inputNome.value
    let sobrenome = inputSobrenome.value
    let idade = inputIdade.value
    let cpf = inputCpf.value
    let renda = inputRenda.value
    let imposto = calcularImposto(renda)

    console.log(imposto)
    
    
    let declarante = {nome: nome, sobrenome: sobrenome, idade: idade, cpf: cpf, renda: renda, imposto: imposto}
    console.log(declarante)


    sessionStorage.declarante = JSON.stringify(declarante) 

    location.href = "http://127.0.0.1:5500/resultado.html"
}
