package br.com.projeto.aluno.entity;

public class Tecnico extends Aluno{
    public Tecnico(String nome, double[] notas) {
        super(nome, notas);
    }

    @Override
    public double calcularMedia(double[] notas) {
        return super.calcularMedia(notas);
    }

    @Override
    public String toString() {
        return "-------------------------------------\n"
                + "      -----TÉCNICO-----"
                + "\n" + super.foiAprovado(this.calcularMedia(super.getNotas()))
                + "\nNome: " + super.getNome()
                + "\nMedia Final: " + String.format("%.2f", this.calcularMedia(super.getNotas()))
                + "\n-------------------------------------";
    }

}
