package domain;

public class Professor implements Pessoa, Funcionario{
    private String nome;
    private int idade;
    private int numeroAulas;
    private double valorAula;

    public Professor(String nome, int idade, int numeroAulas, double valorAula) {
        this.nome = nome;
        this.idade = idade;
        this.numeroAulas = numeroAulas;
        this.valorAula = valorAula;
    }

    @Override
    public double calcularSalario() {
        return this.numeroAulas * this.valorAula;
    }

    @Override
    public String getNome() {
        return this.nome;
    }

    @Override
    public int getIdade() {
        return this.idade;
    }

    @Override
    public void apresentarInfo() {
        System.out.println("----------Professor----------");
        System.out.println("Nome: " + this.getNome());
        System.out.println("Idade: " + this.getIdade());
        System.out.println("Numero de Aulas: " + this.getNumeroAulas());
        System.out.println("Valor por Aula: R$" + this.getValorAula());
        System.out.println("Salário: R$" + this.calcularSalario());
        System.out.println("------------------------------");
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public int getNumeroAulas() {
        return numeroAulas;
    }

    public void setNumeroAulas(int numeroAulas) {
        this.numeroAulas = numeroAulas;
    }

    public double getValorAula() {
        return valorAula;
    }

    public void setValorAula(double valorAula) {
        this.valorAula = valorAula;
    }
}
