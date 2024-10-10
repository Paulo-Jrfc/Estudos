package academy.devdojo.maratonajava.javacore.Hheranca.domain;

public class Funcionario extends Pessoa {

    public double salario;
    static {
        System.out.println("Dentro do bloco inicialização estático de Funcionario");
    }
    {
        System.out.println("Dentro do bloco inicialização de Funcionario 1");
    }
    {
        System.out.println("Dentro do bloco inicialização de Funcionario 2");
    }

    public Funcionario(String nome) {
        super(nome);
        System.out.println("Dentro do construtor funcionário");

    }

    public void imprime(){
        super.imprime();
        System.out.println(this.salario);
        System.out.println("=====================");
    }

    public void relatorioPagamento(){
        System.out.println("Eu : " + this.nome+
                "Recebi o salário de R$" + this.salario);
    }

    public double getSalario() { return salario; }

    public void setSalario(double salario) { this.salario = salario; }
}
