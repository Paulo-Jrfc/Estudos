//Formatação CPF
document.getElementById('cpf').addEventListener('input', function(e) {
    let cpf = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    e.target.value = cpf; // Define o valor do campo como apenas os caracteres numéricos
    if (cpf.length > 0) {
        cpf = cpf.match(/^(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        e.target.value = !cpf[2] ? cpf[1] : cpf[1] + '.' + cpf[2] + (cpf[3] ? '.' + cpf[3] : '') + (cpf[4] ? '-' + cpf[4] : '');
    }
});

//Formatação Nome
document.getElementById('nome').addEventListener('input', function(e) {
    let nome = e.target.value.replace(/[^a-zA-ZÀ-ÿ]/g, ''); // Remove caracteres não alfabéticos
    nome = nome.charAt(0).toUpperCase() + nome.slice(1).toLowerCase(); // Capitaliza a primeira letra e converte o restante para minúsculas
    e.target.value = nome; // Define o valor do campo com as alterações
});

//Formatação Sobrenome
document.getElementById('sobrenome').addEventListener('input', function(e) {
    let sobrenome = e.target.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, ''); // Remove caracteres não alfabéticos
    sobrenome = sobrenome.toLowerCase().replace(/\b\w/g, function(l) { return l.toUpperCase(); }); // Capitaliza a primeira letra de cada palavra
    e.target.value = sobrenome; // Define o valor do campo com as alterações
});

//Formatação Idade

document.getElementById("idade").addEventListener("input", function(event) {
    var campo = event.target;
    var valor = campo.value;
    
    // Remove todos os caracteres não numéricos
    valor = valor.replace(/\D/g, '');
    
    // Limita o comprimento máximo para 3 caracteres
    if (valor.length > 3) {
        campo.value = valor.slice(0, 3);
    } else {
        campo.value = valor; // Garante que somente números sejam mantidos
    }
    
    // Limita a idade a um máximo de 140 anos
    if (parseInt(valor) > 140) {
        document.getElementById("mensagemErro").innerText = "A idade não pode exceder 140 anos.";
        campo.value = "140";
    } else if (parseInt(valor) < 18) {
        document.getElementById("mensagemErro").innerText = "A idade mínima é de 18 anos.";
    } else {
        document.getElementById("mensagemErro").innerText = ""; // Limpa a mensagem de erro
    }
});

function validarIdade(idade) {
    if (!/^\d{1,3}$/.test(idade)) {
        return false;
    }
    
    idade = parseInt(idade, 10);
    
    if (idade < 18 || idade > 140) {
        return false;
    }
    
    return true;
}

// Exemplo de uso:
document.getElementById("idade").addEventListener("blur", function(event) {
    var idade = event.target.value;
    if (validarIdade(idade)) {
        console.log("Idade válida!");
    } else {
        console.log("Idade inválida!");
    }
});
