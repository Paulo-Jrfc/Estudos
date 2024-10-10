package br.com.projeto.aluno.entity;

public class Universitario extends Aluno {
    private double notaProva;
    public Universitario (String nome, double[] notas, double notaProva) {
        super(nome, notas);
        this.notaProva = notaProva;
    }
    public double getNotaProva() {
        return notaProva;
    }

    public void setNotaProva(double notaProva) {
        this.notaProva = notaProva;
    }


    public double calcularMedia(double[] notas, double notaProva) {
        double soma = 0;
        for (int i = 0; i < notas.length; i++) {
            soma += notas[i];
        }
        soma += notaProva;
        return soma;
    }

    @Override
    public String toString() {
        return "-------------------------------------\n"
                + "     -----UNIVERSITARIO-----"
                + "\n" + foiAprovado(this.calcularMedia(this.getNotas(), this.notaProva))
                + "\nNome: " + super.getNome()
                + "\nMedia Final: " + String.format("%.2f", this.calcularMedia(super.getNotas(), this.notaProva))
                + "\n-------------------------------------";
    }
}
