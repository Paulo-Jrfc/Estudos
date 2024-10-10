package academy.devdojo.maratonajava.javacore.Bintroducaometodos.test;

import academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio.Funcionario;

public class FuncionarioTest01 {
    public static void main(String[] args) {
        Funcionario funcionario01 = new Funcionario();
        funcionario01.setNome("Paulo");
        funcionario01.setIdade(17);
        funcionario01.setSalario(new double[]{900.00, 700.00, 1000.00});

        funcionario01.imprime();
        System.out.println("Média: " + funcionario01.getMedia());

    }
}
