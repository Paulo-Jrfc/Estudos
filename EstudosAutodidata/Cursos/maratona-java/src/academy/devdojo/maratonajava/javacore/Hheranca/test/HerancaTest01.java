package academy.devdojo.maratonajava.javacore.Hheranca.test;

import academy.devdojo.maratonajava.javacore.Hheranca.domain.Endereco;
import academy.devdojo.maratonajava.javacore.Hheranca.domain.Funcionario;
import academy.devdojo.maratonajava.javacore.Hheranca.domain.Pessoa;

public class HerancaTest01 {
    public static void main(String[] args) {
        Endereco endereco = new Endereco();
        endereco.setRua("Rua 3");
        endereco.setCep("012345-209");
        Pessoa pessoa = new Pessoa("Bruno");
        pessoa.setCpf("580.468.557-52");
        pessoa.setEndereco(endereco);
        pessoa.imprime();
        Funcionario funcionario = new Funcionario("Guilherme");
        funcionario.setCpf("000.000.000-00");
        funcionario.setEndereco(endereco);
        funcionario.setSalario(20000);

        funcionario.imprime();
    }
}
