package domain;

public class Serie extends Conteudo{
    private int duracaoMinutos;
    private int qtdEpisodios;
    private int qtdTemporadas;

    public Serie(String categoria, String titulo, int duracaoMinutos, int quantEpisodios, int quantTemporadas) {
        super(categoria, titulo);
        this.duracaoMinutos = duracaoMinutos;
        this.qtdEpisodios = quantEpisodios;
        this.qtdTemporadas = quantTemporadas;
    }

    public int getDuracaoMinutos() {
        return duracaoMinutos;
    }

    public void setDuracaoMinutos(int duracaoMinutos) {
        this.duracaoMinutos = duracaoMinutos;
    }

    public int getQtdEpisodios() {
        return qtdEpisodios;
    }

    public void setQtdEpisodios(int qtdEpisodios) {
        this.qtdEpisodios = qtdEpisodios;
    }

    public int getQtdTemporadas() {
        return qtdTemporadas;
    }

    public void setQtdTemporadas(int qtdTemporadas) {
        this.qtdTemporadas = qtdTemporadas;
    }

    @Override
    public String toString() {
        return super.toString()+
                "\nDuração em minutos: " + this.getDuracaoMinutos() + " min" +
                "\nQuantidade de episódios: " + this.getQtdEpisodios() +
                "\nQuantidade de temporadas: "  + this.getQtdTemporadas() +
                "\n--------------------------------";
    }
}
