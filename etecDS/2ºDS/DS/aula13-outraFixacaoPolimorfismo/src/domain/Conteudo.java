package domain;

public class Conteudo {
    private String categoria;
    private String titulo;

    public Conteudo(String categoria, String titulo) {
        this.categoria = categoria;
        this.titulo = titulo;
    }

    public void setCategoria(String categoria){
        this.categoria = categoria;
    }
    public String getCategoria(){
        return this.categoria;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public String getTitulo() {
        return this.titulo;
    }

    @Override
    public String toString(){
        return "--------------------------------" +
                "\nCategoria: " + this.getCategoria() +
                "\nTítulo: " + this.getTitulo();
    }


}
