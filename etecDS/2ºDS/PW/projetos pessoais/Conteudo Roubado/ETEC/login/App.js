const img = document.querySelector('#eye');
const input = document.querySelector('#senha')

img.classList.toggle('invisible');

img.addEventListener('click', () => {
    if(img.classList.contains('invisible')){
        img.classList.toggle('invisible');
        input.type = 'text';
        img.src = '../imagens/hidden.png';
    }
    else{
        img.classList.toggle('invisible');
        input.type = 'password'; 
        img.src = '../imagens/eye.png';
    }

});

function focus(){
    document.getElementsByTagName('input')[0].focus();
}