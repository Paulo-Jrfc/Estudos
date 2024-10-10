package domain;

public class Filme extends Conteudo {
    private int duracaoMinutos;

    public Filme(String categoria, String titulo, int duracaoMinutos) {
        super(categoria, titulo);
        this.duracaoMinutos = duracaoMinutos;
    }

    public int getDuracaoMinutos() {
        return duracaoMinutos;
    }

    public void setDuracaoMinutos(int duracaoMinutos) {
        this.duracaoMinutos = duracaoMinutos;
    }

    @Override
    public String toString() {
        return super.toString() +
                "\nDuração em minutos: " + this.getDuracaoMinutos()+ " min" +
                "\n--------------------------------";

    }
}
