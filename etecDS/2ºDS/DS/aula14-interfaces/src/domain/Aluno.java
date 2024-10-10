package domain;

public class Aluno implements Pessoa {


    public String nome;
    public int idade;

    public Aluno(String nome, int idade) {
        this.nome = nome;
        this.idade = idade;
    }

    public void setNome(String nome){
        this.nome = nome;
    }

    @Override
    public String getNome() {
        return this.nome;
    }

    public void setIdade(int idade){
        this.idade = idade;
    }

    @Override
    public int getIdade() {
        return this.idade;
    }

    @Override
    public void apresentarInfo() {
        System.out.println("----------Aluno----------");
        System.out.println("Nome: " + this.getNome());
        System.out.println("Idade: " + this.getIdade());
        System.out.println("--------------------------");
    }
}
