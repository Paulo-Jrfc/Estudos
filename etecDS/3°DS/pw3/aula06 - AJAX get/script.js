let cep = '08370350'
let url = `https://viacep.com.br/ws/${cep}/json/`

fetch(url)
        .then(function(response){
           return response.json()
    })
        .then(function(response){
            setTimeout(function(){
                let span = document.querySelector("span")
                span.textContent = response.logradouro
            }, 2000)
            console.log(response)
    })
        .catch(console.error())