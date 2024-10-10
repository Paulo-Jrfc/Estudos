let body = document.querySelector('body');
import noticias from "./noticias.js";
// for (let noticias = 0; index < array.length; index++) {
//     const element = array[index];

    

    // noticias = document.createElement('div');
    // noticias.innerHTML = `
    //     <div class="div_img">
    //         <img src="${imagem[i]}" alt="Chocolate">
    //     </div>
    //     <h3>${titulo[i][0]}</h3>
    //     <p>${corpo[i][1]}</p>
    //     <p>${data[i][2]}</p>
    //     <p>${autor[i][2]}</p>
    // `;

    
    noticias.forEach( item =>{
        let tags = []
        let listaTextoTags =  ['div', 'div', 'img', 'p','p','p','p']
        tags = criarTags(listaTextoTags, tags)
        tags = addClasses(tags)

        tags = organizar(tags)
        tags[3].textContent = item.titulo
        console.log(tags[3].textContent)
    })
    


   

    // tags[0].classList.add('header')


    function criarTags(listaTextoTags, tags){
        listaTextoTags.forEach (item => {
            let novaTag = document.createElement(item)
            tags.push(novaTag)
        })
        return tags
    }

    function addClasses(tags){
        tags[0].classList.add('card')
        tags[1].classList.add('header')
        tags[2].classList.add('imagem')
        tags[3].classList.add('alert')
        tags[4].classList.add('message')
        tags[5].classList.add('data')
        tags[6].classList.add('autor')

        return tags
    }

    function organizar(tags){
        tags[0].appendChild(tags[1])
        tags[1].appendChild(tags[2])
        tags[1].appendChild(tags[3])
        tags[0].appendChild(tags[4])
        tags[0].appendChild(tags[5])
        tags[0].appendChild(tags[6])

 
        return tags
    }

 
    
    // <div class="card">
    //     <div class="header">
    //       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDJcPGeYcBlKGAZD_S3eTwXzQNiU-Wgr-wlZk8kJD-Wg&s" alt="">
    //       <p class="alert">Titulo</p>
    //     </div>
      
    //     <p class="message">
    //       Corpo da Notícia
    //     </p>

    //     <p class="data">Data</p>
    //     <p class="Autor">Autor</p>
        
    //     </div>
// }