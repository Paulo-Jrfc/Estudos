package academy.devdojo.maratonajava.javacore.Hheranca.test;

import academy.devdojo.maratonajava.javacore.Hheranca.domain.Funcionario;

public class HerancaTest02 {
    // 0 - Bloco de inicialização estatico da super classe é executado quando a JVM carregar a classe pai
    // 1- Bloco de inicialização estatico da sub classe é executado quando a JVM carregar a classe filha
    // 2 - Alocado espaço em memoria pro objeto da superclasse
    // 3 - Cada atributo de superclasse é criado e inicializado com valores default ou o que for passado
    // 4 - Bloco de inicialização da superclasse é executado na ordem em que aparece
    // 5 - Construtor é executado da superclasse
    // 6 - Alocado espaço em memoria pro objeto da subclasse
    // 7 - Cada atributo de subclasse é criado e inicializado com valores default ou o que for passado
    // 8 - Bloco de inicialização da subclasse é executado na ordem em que aparece
    // 9 - Construtor é executado da subclasse

    //VEJA A ORDEM A SEGUIR
    //    Dentro do bloco inicialização estático de pessoa
    //    Dentro do bloco inicialização estático de Funcionario
    //    Dentro do bloco inicialização de pessoa 1
    //    Dentro do bloco inicialização de pessoa 2
    //    Dentro do construtor de pessoa
    //    Dentro do bloco inicialização de Funcionario 1
    //    Dentro do bloco inicialização de Funcionario 2
    //    Dentro do construtor funcionário

    public static void main(String[] args) {
        Funcionario funcionario = new Funcionario("Jiraya");
    }
}
