package domain;

public abstract class Cliente {
    private String nome;
    private String endereco;
    private int idade;
    private double valorCompra;
    private NivelCliente nivelCliente;

    public Cliente(String nome, String endereco, int idade, double valorCompra) {
        this.nome = nome;
        this.endereco = endereco;
        this.idade = idade;
        this.valorCompra = valorCompra;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public NivelCliente getNivelCliente() {
        return nivelCliente;
    }

    public void setNivelCliente(NivelCliente nivelCliente) {
        this.nivelCliente = nivelCliente;
    }

    public double getValorCompra() {
        return valorCompra;
    }

    public void setValorCompra(double valorCompra) {
        this.valorCompra = valorCompra;
    }

    @Override
    public String toString() {
        return "-----------------------------------------------"
                +"\nNome: " + this.getNome()
                +"\nIdade: " + this.getIdade()
                +"\nEndereco" + this.getEndereco()
                +"\nNivel: " + this.getNivelCliente().getValor()
                +"\nValor da compra" + String.format("%.2f", this.getValorCompra());
    }
}
